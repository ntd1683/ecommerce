@props([
    'value' => '',
    'name' => '',
])
<div class="imgUp">
    <img src="{{ $value == '' ? asset('images/default.png') : Storage::url($value) }}" alt="{{ $name }}" {{ $attributes->merge(['class' => 'imagePreview']) }} style="width:13rem; height:auto">
    <div class="margin-top-5" style="margin-left:4rem;">
        <label class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none transition ease-in-out duration-150 disabled:opacity-75 shadow-lg transform active:scale-x-75 transition-transform bg-white !border-gray-300 !text-gray-700 shadow-sm hover:bg-gray-100 !disabled:opacity-25">
            {{ __('Upload') }}
            <input type="file" class="uploadFile img" value="{{ $value }}"
                   style="width: 0;height: 0;overflow: hidden;" name="{{ $name }}" accept="image/png, image/jpeg, image/jpg">
        </label>
    </div>
</div>
