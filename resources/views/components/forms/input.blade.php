@props([
    'type' => 'text',
    'placeholder' => '',
    'id' => ''
])

@if($type === 'textarea')
    <textarea
        {{ $attributes->merge([
            'class' => "px-4 py-2 w-full text-xs text-gray-500 border-gray-200 border-[1px] rounded-sm focus:outline-none",
            'rows' => "4",
            'placeholder' => $placeholder,
            'id' => $id,
        ]) }}></textarea>
@else
    <input
        {{ $attributes->merge([
            'class' => "px-4 py-2 w-full text-xs text-gray-500 border-gray-200 border-[1px] rounded-sm focus:outline-none",
            'type' => $type,
            'placeholder' => $placeholder,
            'id' => $id,
        ]) }} />
@endif