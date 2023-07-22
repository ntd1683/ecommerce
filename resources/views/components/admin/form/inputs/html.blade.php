<textarea {{ $attributes }} ></textarea>
@push('js')
    <script src="https://cdn.tiny.cloud/1/554nlfnedgud5pjqpnxltfthe5jqvwv4qfzzv5vimxdipvqk/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>
@endpush
