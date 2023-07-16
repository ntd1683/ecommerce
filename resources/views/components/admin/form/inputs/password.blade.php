@props([
    'class' => ''
])
<div class="relative">
    <x-admin.form.inputs type="password" class="input-password {{ $class }}" {{ $attributes }}/>
    <i class="absolute fas fa-eye right-[11px] top-[13px] cursor-pointer transition ease-in-out delay-50 hover:opacity-50 show-password"></i>
</div>
