@props(['style' => 'primary'])

<button {{ $attributes->merge([
    'type' => 'button',
]) }} @class([
    'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none transition ease-in-out duration-150 disabled:opacity-75 shadow-lg transform active:scale-x-75 transition-transform',
    'bg-primary hover:bg-secondary active:bg-secondary focus:bg-secondary' => ($style === 'primary'),
    'bg-white !border-gray-300 !text-gray-700 shadow-sm hover:bg-gray-100 !disabled:opacity-25' => ($style === 'secondary'),
    'bg-red-600 hover:bg-red-500 active:bg-red-700 focus:ring-red-500' => ($style === 'danger'),
    'bg-yellow-500 hover:bg-yellow-400 active:bg-yellow-500 focus:ring-yellow-400' => ($style === 'warning'),
])>
    {{ $slot }}
</button>
