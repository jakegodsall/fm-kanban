<?php

namespace App\Livewire\Modals;

use App\Models\Kanban\Board;
use App\Models\Kanban\Task;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;

class AddNewTaskModal extends Component
{

    public Board $board;
    public bool $showModal = true;

    # Form Data
    #[Validate('required|min:3')]
    public string $name = '';

    public string $description = '';

    public array $subtasks = [];

    public int $selectedStatusId;

    protected function rules(): array
    {
        return [
            'selectedStatusId' => [
                'required',
                Rule::exists('board_columns', 'id')
                    ->where('board_id', $this->board->id)
            ],
        ];
    }

    protected function messages(): array
    {
        return [
            'selectedStatusId.required' => 'You must select the status for the task.',
            'selectedStatusId.exists' => 'The task must be assigned to a valid status.'
        ];
    }

    protected $listeners = [
        'showAddNewTaskModal' => 'toggleShowModal',
    ];

    public function mount(int $boardId): void
    {
        $this->board = Board::with('columns')->findOrFail($boardId);
        $this->selectedStatusId = $this->board->columns->first()->id;
    }

    public function addSubtask(): void
    {
        $this->subtasks[] = [
            'id' => (string) Str::uuid(),
            'name' => '',
        ];
    }

    public function removeSubtask(string $uuid): void
    {
        $this->subtasks = array_values(
            array_filter($this->subtasks, fn ($subtask) => $subtask['id'] != $uuid)
        );
    }

    public function toggleShowModal(): void
    {
        $this->showModal = !$this->showModal;
        Log::info('Modal State: ' . $this->showModal);
    }

    public function submit(): void
    {
        dd($this->name, $this->description, $this->subtasks, $this->selectedStatusId);
        $this->validate();
        $task = Task::create([
            'name' => $this->name,
            'description' => $this->description,
            'board_column_id' => $this->selectedStatusId,

        ]);

        if (count($this->subtasks) > 0) {
            $subtasks = $this->validateSubtasks($this->subtasks);
            $task->subtasks()->createMany(
                collect($subtasks)
            );
        }
     
        $this->reset();
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.modals.add-new-task-modal');
    }

    /**
     * Filter out empty string subtasks from the array.
     * 
     * @param array
     * @return array
     */
    private function validateSubtasks(array $subtasks): array
    {
        return array_filter($subtasks, fn ($sub) => trim($sub['name']) !== '');
    }
}
