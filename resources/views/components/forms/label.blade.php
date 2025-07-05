@props([
    'for' => ''
])

<label
    for="{{ $for }}"
    class="block text-gray-400 text-xs font-bold"
>{{ $slot }}</label>