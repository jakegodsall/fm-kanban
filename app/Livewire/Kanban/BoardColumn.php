<?php

namespace App\Livewire\Kanban;

use App\Models\Kanban\BoardColumn as KanbanBoardColumn;
use Livewire\Component;

class BoardColumn extends Component
{
    public KanbanBoardColumn $column;

    public function mount(int $columnId): void
    {
        $this->column = KanbanBoardColumn::with('tasks')->findOrFail($columnId);
    }
    
    public function render()
    {
        return view('livewire.kanban.board-column');
    }
}
