<x-modal>
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
            <x-forms.input type="text" id="subtasks" />
        </div>
        <div class="space-y-2 w-full">
            <x-forms.label for="status">Status</x-forms.label>
            <x-forms.input type="text" id="status" />
        </div>
        <button class="w-full text-sm text-white py-2 rounded-full bg-main-purple cursor-pointer hover:opacity-90">Create Task</button>
    </div>
    
</x-modal>