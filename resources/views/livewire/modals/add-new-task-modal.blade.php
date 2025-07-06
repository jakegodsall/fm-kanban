<div>
    @if ($this->showModal)
        <x-modal wire:model="showModal">
            <h1 class="text-xl font-bold mb-5">Add New Task</h1>
            <form wire:submit.prevent="submit" class="space-y-6">
                <div class="space-y-2 w-full">
                    <x-forms.label for="title">Title</x-forms.label>
                    <x-forms.input type="text" id="title" placeholder="e.g. Take coffee break" wire:model="name" />
                </div>
                <div class="space-y-2 w-full">
                    <x-forms.label for="description">Description</x-forms.label>
                    <x-forms.input type="textarea" id="description" placeholder="e.g. It's always good to take a break. This 15 minute break will recharge the batteries a little." wire:model="description" />
                </div>
                <div class="space-y-2 w-full">
                    <x-forms.label for="subtasks">Subtasks</x-forms.label>
                    <ul class="space-y-2">
                        @if(count($this->subtasks) > 0)
                            @foreach($this->subtasks as $subtask)
                                <li class="flex space-x-2 items-center" wire:key="subtask-{{ $subtask['id'] }}">
                                    <x-forms.input wire:model="subtasks.{{ $subtask['id'] }}.name" />
                                    <button
                                        type="button"
                                        class="cursor-pointer"
                                        wire:click="removeSubtask('{{ $subtask['id'] }}')"
                                    >
                                        <x-close-icon colour="gray" />
                                    </button>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <button
                        type="button"
                        wire:click="addSubtask"
                        class="w-full text-xs font-bold bg-background-light text-main-purple rounded-full py-2 cursor-pointer"
                    >+ Add New Subtask</button>
                </div>
                <div class="space-y-2 w-full">
                    <x-forms.label for="status">Status</x-forms.label>
                    @if($this->board->columns)
                        <x-forms.select :options="$this->board->columns" />
                    @endif
                </div>
                <button type="submit" class="w-full text-sm text-white py-2 rounded-full bg-main-purple cursor-pointer hover:opacity-90">Create Task</button>
            </form>
        </x-modal>
    @endif
</div>