<?php

namespace App\Livewire\Modals;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AddNewTaskModal extends Component
{
    public $showModal = true;

    public array $subtasks = [
        'Subtask 1',
        'Subtask 2',
    ];

    protected $listeners = [
        'showAddNewTaskModal' => 'toggleShowModal',
    ];

    public function addSubtask(): void
    {
        array_push($this->subtasks, '');
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
