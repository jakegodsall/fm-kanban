<?php

namespace App\Http\Controllers\Kanban;

use App\Http\Controllers\Controller;
use App\Models\Kanban\Board;

class BoardController extends Controller
{
    public function show(Board $board)
    { 
        $board->load('columns');
        return view('kanban.boards.show', [
            'board' => $board,
        ]);
    }
}
