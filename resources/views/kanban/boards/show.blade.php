<x-layouts.app :title="__('Boards')">
    <main class="flex">
        @foreach($board->columns as $column)
        <livewire:kanban.board-column
            :columnId="$column->id"
            key="board-{{ $board->id }}-column-{{ $column->id }}"
        />
        @endforeach
    </main>
</x-layouts.app>