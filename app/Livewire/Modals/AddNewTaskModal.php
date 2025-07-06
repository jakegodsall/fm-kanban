<?php

namespace App\Livewire\Modals;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;

class AddNewTaskModal extends Component
{
    public $showModal = true;

    public array $subtasks = [
        ['id' => 1, 'name' => 'Subtask 1'],
        ['id' => 2, 'name' => 'Subtask 2'],
    ];

    protected $listeners = [
        'showAddNewTaskModal' => 'toggleShowModal',
    ];

    public function addSubtask(): void
    {
        $this->subtasks[] = [
            'id' => (string) Str::uuid(),
            'title' => '',
        ];
    }

    public function removeSubtask(int $index): void
    {
        $this->subtasks = array_values(
            array_filter($this->subtasks, fn ($subtask) => $subtask['id'] != $index)
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
