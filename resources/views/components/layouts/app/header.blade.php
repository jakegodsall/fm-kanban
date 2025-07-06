<header x-data class="fixed flex justify-between w-full px-4 py-5 bg-white">
    <div class="flex gap-4">
        <x-kanban-logo-small />
        <div class="flex gap-2 items-center">
            <p class="font-bold">Platform Launch</p>
            <x-caret-down />
        </div>
    </div>
    <div class="flex items-center gap-4">
        <button
            x-on:click="Livewire.dispatch('showAddNewTaskModal')"
            class="px-4 py-2 rounded-full bg-secondary-purple cursor-pointer"
        >
            <x-plus-icon color="white" />
        </button>
        <button>
            <x-vertical-ellipsis color="grey" />
        </button>
    </div>
</header>

<livewire:modals.add-new-task-modal />