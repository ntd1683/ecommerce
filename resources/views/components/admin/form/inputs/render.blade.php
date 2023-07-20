@props([
    'name' => '',
    'value' => '',
])
<div class="relative flex flex-grow items-stretch focus-within:z-10">
    <x-admin.form.inputs name="{{ $name }}" value="{{ $value }}" class="!rounded-l-lg !shadow-none renderInput"/>
</div>
<button type="button" onclick="render(this)" class="relative -ml-px inline-flex items-center gap-x-1.5 rounded-r-md px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
    <i class="fas fa-magic"></i>
</button>
@push('js')
    <script>
        function random(length) {
            let result = '';
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            const charactersLength = characters.length;
            let counter = 0;
            while (counter < length) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
                counter += 1;
            }
            return result.toUpperCase();
        }
        function render(e) {
            let input = e.parentElement.querySelector('.renderInput');
            let prefix = '{{ $name }}';
            input.value = prefix.toUpperCase() + '_' + random(10);
        }
    </script>
@endpush
