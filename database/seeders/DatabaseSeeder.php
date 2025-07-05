<?php

namespace Database\Seeders;

use App\Models\Kanban\Board;
use App\Models\Kanban\BoardColumn;
use App\Models\Kanban\Subtask;
use App\Models\Kanban\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $board = Board::create([
            'name' => 'Platform Launch'
        ]);

        $boardColumns = ['todo', 'doing', 'done'];

        BoardColumn::ma
    }
}
