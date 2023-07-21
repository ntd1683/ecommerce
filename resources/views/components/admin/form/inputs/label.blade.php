@props([
    'for' => '',
])
<label
    {{ $attributes->merge(["class" => "block text-blueGray-600 text-base font-bold mb-2"]) }}
    for="{{ $for }}"
>{{ $slot }}</label>
