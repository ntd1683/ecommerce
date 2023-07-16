@props([
    'for' => '',
])
<label
    {{ $attributes->merge(["class" => "block uppercase text-blueGray-600 text-xs font-bold mb-2"]) }}
    for="{{ $for }}"
>{{ $slot }}</label>
