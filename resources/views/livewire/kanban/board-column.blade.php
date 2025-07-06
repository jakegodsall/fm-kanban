<div>
    <div class="flex items-center gap-2 mb-6">
        <div class="rounded-full w-4 h-4 bg-blue-500"></div>
        <p class="text-gray-400 tracking-wide">{{ strtoupper($column->name) }} ({{ $column->tasks->count() }})</p>
    </div>
    <ul class="flex flex-col space-y-5">
        @foreach($column->tasks as $task)
        <li>
            <x-task-card :task="$task" />
        </li>
        @endforeach
    </ul>
</div>
