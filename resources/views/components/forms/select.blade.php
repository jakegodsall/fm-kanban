<div 
    x-data="{
        open: false,
        selected: @entangle('selectedStatusId').live
    }"
    class="w-full border-[1px] border-gray-300 rounded-md"
>
    {{-- Selected Item --}}
     <div
            x-on:click="open = ! open"
            class="flex select-none items-center justify-between px-4 py-2 cursor-pointer"
        >
            <span class="text-sm font-medium">
                {{ ucfirst(optional($options->firstWhere('id', $this->selectedStatusId))->name) ?? 'Select status' }}
            </span>
        <x-caret-down />
    </div>
    {{-- Dropdown Items --}}
    <div 
        x-show="open"
        x-transition
        x-on:click.away="open = false"
        x-cloak
        class="absolute w-[320px] bg-white border border-gray-300 rounded-md shadow-lg z-10"
    >
        @foreach ($options as $option)
            <div
                x-on:click="selected = {{ $option->id }}; open = false"
                class="px-4 py-2 select-none text-sm hover:bg-gray-100 cursor-pointer"
            >
                {{ ucfirst($option->name) }}
            </div>
        @endforeach
    </div>

</div>