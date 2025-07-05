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
            'name' => 'Platform Launch',
            'user_id' => $user->id,
        ]);

        $columns = collect(['todo', 'doing', 'done'])
            ->map(function ($name) use ($user, $board) {
                return [
                    'name' => $name,
                    'user_id' => $user->id,
                    'board_id' => $board->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            })->toArray();
        
        BoardColumn::insert($columns);

        $todoTasks = collect([
            'Build UI for onboarding flow',
            'Build UI for search',
            'Create template structures',
            'QA and test all major user journeys',
        ])->map(function ($name) use ($user) {
            return [
                'name' => $name,
                'description' => '',
                'board_column_id' => BoardColumn::where('name', 'todo')->first()->id,
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();

        $doingTasks = collect([
            'Design settings and search pages',
            'Add account management endpoints',
            'Design onboarding flow',
            'Add search endpoints',
            'Add authentication endpoints',
            'Research pricing points of various competitors and trial different business models'
        ])->map(function ($name) use ($user) {
            return [
                'name' => $name,
                'description' => '',
                'board_column_id' => BoardColumn::where('name', 'doing')->first()->id,
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();

        $doneTasks = collect([
            'Conduct 5 wireframe tests',
            'Create wireframe prototype',
            'Review results of usability tests and iterate',
            'Create paper prototypes and conduct 10 usability tests with potential customers',
            'Market discovery',
            'Competitor analysis',
            'Reserach the market',
        ])->map(function ($name) use ($user) {
            return [
                'name' => $name,
                'description' => '',
                'board_column_id' => BoardColumn::where('name', 'done')->first()->id,
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();

        Task::insert(array_merge(
            $todoTasks,
            $doingTasks,
            $doneTasks
        ));
    }
}
