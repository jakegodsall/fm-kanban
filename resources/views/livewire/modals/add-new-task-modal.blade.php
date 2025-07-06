<div>
    @if ($this->showModal)
        <x-modal wire:model="showModal">
            <h1 class="text-xl font-bold mb-5">Add New Task</h1>
            <div class="space-y-6">
                <div class="space-y-2 w-full">
                    <x-forms.label for="title">Title</x-forms.label>
                    <x-forms.input type="text" id="title" placeholder="e.g. Take coffee break" />
                </div>
                <div class="space-y-2 w-full">
                    <x-forms.label for="description">Description</x-forms.label>
                    <x-forms.input type="textarea" id="description" placeholder="e.g. It's always good to take a break. This 15 minute break will recharge the batteries a little." />
                </div>
                <div class="space-y-2 w-full">
                    <x-forms.label for="subtasks">Subtasks</x-forms.label>
                    <ul class="space-y-2">
                        @foreach ($this->subtasks as $subtask)
                            <li class="flex space-x-2 items-center">
                                <x-forms.input />
                                <x-close-icon colour="gray" />
                            </li>
                        @endforeach
                    </ul>
                    <button
                        wire:click="addSubtask"
                        class="w-full text-xs font-bold bg-background-light text-main-purple rounded-full py-2 cursor-pointer"
                    >+ Add New Subtask</button>
                </div>
                <div class="space-y-2 w-full">
                    <x-forms.label for="status">Status</x-forms.label>
                    <x-forms.input type="text" id="status" />
                </div>
                <button class="w-full text-sm text-white py-2 rounded-full bg-main-purple cursor-pointer hover:opacity-90">Create Task</button>
            </div>
        </x-modal>
    @endif
</div>