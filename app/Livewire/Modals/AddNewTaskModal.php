<?php

namespace App\Livewire\Modals;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AddNewTaskModal extends Component
{
    public $showModal = false;

    protected $listeners = [
        'showAddNewTaskModal' => 'toggleShowModal',
    ];

    public function toggleShowModal(): void
    {
        $this->showModal = !$this->showModal;
        Log::info('Modal State: ' . $this->showModal);
    }

    public function updatingShowModal(): void
    {
        Log::info('Modal State' . $this->showModal);
    }

    public function render()
    {
        return view('livewire.modals.add-new-task-modal');
    }
}
