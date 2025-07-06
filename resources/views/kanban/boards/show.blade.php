<x-layouts.app :title="__('Boards')">
    <main class="flex gap-5 px-4 py-5 mt-20">
        @foreach($board->columns as $column)
            <livewire:kanban.board-column
                :columnId="$column->id"
                key="board-{{ $board->id }}-column-{{ $column->id }}"
            />
        @endforeach
    </main>

    <livewire:modals.add-new-task-modal :boardId="$board->id" />
</x-layouts.app>