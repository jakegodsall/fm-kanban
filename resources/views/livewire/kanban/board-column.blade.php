<div>
    @foreach ($column->tasks as $task)
        <x-task-card task="{{ $task }}" />
    @endforeach
</div>
