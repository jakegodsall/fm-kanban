@props([
    'type' => 'text',
    'placeholder' => '',
    'id' => ''
])

@if($type === 'textarea')
    <textarea
        class="px-4 py-1 text-xs text-gray-500 border-gray-200 border-[1px] rounded-sm focus:outline-none cursor-none"
        rows="4"
        placeholder="{{ $placeholder }}"
        id="{{ $id }}"
    ></textarea>
@else
    <input
        class="px-4 py-1 text-xs text-gray-500 border-gray-200 border-[1px] rounded-sm focus:outline-none cursor-none"
        type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        id="{{ $id }}"
    />
@endif