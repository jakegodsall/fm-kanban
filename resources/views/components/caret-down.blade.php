@props([
    'color' => 'black'
])

<svg
    class="{{ $attributes->merge(['class' => 'w-3 h-3']) }}"
    width="9"
    height="7"
    viewBox="0 0 9 7"
    fill="{{ $color }}"
    xmlns="http://www.w3.org/2000/svg"
>
    <path d="M1 1L5 5L9 1" stroke="#635FC7" stroke-width="2" />
</svg>
