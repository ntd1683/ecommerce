@props([
    'type' => 'text',
])
<input type="{{ $type }}"
    {{ $attributes->merge(["class" => "border border-solid border-gray-300 w-full py-1 px-5 mb-5 placeholder-current text-dark h-12 focus:outline-none text-base"]) }}
/>
