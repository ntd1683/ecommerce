@props([
    'id' => 'radio',
    'checked' => '0',
    'value' => '0'
])
<input type="radio" {{ $attributes }} id="{{ $id }}" @checked($value == $checked) value="{{ $value }}">
<label for="{{ $id }}">{{ $slot }}</label>
