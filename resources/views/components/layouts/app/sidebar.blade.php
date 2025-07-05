<aside
    x-data="{
        open: JSON.parse(localStorage.getItem('drawerOpen') ?? 'true'),
        toggle() {
            this.open = !this.open;
            localStorage.setItem('drawerOpen', JSON.stringify(this.open));
        }
    }"
>
    <div
        x-cloak
        class="bg-white h-full relative transition-all duration-300"
        :class="open ? 'w-60' : 'w-20'">
        <button 
            class="absolute top-4 right-4 p-2 text-gray-300 hover:text-white hover:bg-gray-600 rounded-md transition-colors"
            @click="toggle()"
            aria-label="Close sidebar"
        >
            <svg class="w-5 h-5 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <x-kanban-logo />
        <i class="fa-solid fa-angle-right"></i>
        <nav class="py-12 px-8" x-show="open" x-transition:enter.delay.100ms x-transition:exit.delay.200ms>
            <ul class="space-y-2">
                <li><a href="#" class="flex items-center gap-2 text-gray-400 font-bold"><x-board-icon /> Platform Launch</a></li>
                <li><a href="#" class="flex items-center gap-2 text-gray-400 font-bold"><x-board-icon /> Marketing Plan</a></li>
                <li><a href="#" class="flex items-center gap-2 text-gray-400 font-bold"><x-board-icon /> Roadmap</a></li>
                <li><a href="#" class="flex items-center gap-2 text-gray-400 font-bold"><x-board-icon /> +Create New Board</a></li>
            </ul>
        </nav>
    </div>
</aside>
