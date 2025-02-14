@php
    $baseClass = "inline-flex items-center font-medium rounded-lg focus:ring-2 focus:outline-none";
    $sizeClass = match ($size) {
        'sm' => 'px-3 py-1 text-sm',
        'md' => 'px-4 py-2 text-base',
        'lg' => 'px-5 py-3 text-lg',
        default => 'px-4 py-2 text-base',
    };

    $variantClass = match ($variant) {
        'primary' => 'bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-300',
        'secondary' => 'bg-gray-600 text-white hover:bg-gray-700 focus:ring-gray-300',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-300',
        default => 'bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-300',
    };
@endphp

<button type="{{ $type }}" class="{{ $baseClass }} {{ $sizeClass }} {{ $variantClass }}">
    {{ $slot }}
</button>
