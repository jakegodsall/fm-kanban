<?php

namespace App\Livewire\Modals;

use App\Models\Kanban\Board;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;

class AddNewTaskModal extends Component
{
    public bool $showModal = true;
    public Board $board;

    public array $subtasks = [
    ];

    public int $selectedStatusId;

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
            'title' => '',
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

    public function render()
    {
        return view('livewire.modals.add-new-task-modal');
    }
}
