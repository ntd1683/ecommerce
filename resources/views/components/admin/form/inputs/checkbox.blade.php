@props([
    'class' => '',
])
<label class="inline-flex items-center cursor-pointer">
    <x-admin.form.inputs type="checkbox" {{ $attributes }} class="ml-1 !w-5 h-5 focus:!ring-0 {{ $class }}" value="1"/>
    <span
        class="ml-2 text-lg font-semibold text-blueGray-700"
    >{{ $slot }}</span>
</label>
