@props([
    "type" => "button",
])
<button
    type="{{ $type }}"
    {{ $attributes->merge(["class" =>"inline-block leading-none uppercase text-sm text-white bg-dark hover:bg-orange px-5 py-4 transition-all"]) }}>
    {{ $slot }}
</button>
