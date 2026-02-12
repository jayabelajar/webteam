@props([
    'href' => '#',
    'variant' => 'secondary',
    'fullOnMobile' => true,
])

@php
    $baseClass = 'inline-flex items-center justify-center rounded-md px-4 py-2.5 text-sm font-semibold transition';
    $widthClass = $fullOnMobile ? ' w-full sm:w-auto' : '';
    $variantClass = $variant === 'primary'
        ? 'bg-blue-600 text-white hover:bg-blue-700'
        : 'border border-blue-200 bg-blue-50 text-blue-700 hover:bg-blue-100';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $baseClass . $widthClass . ' ' . $variantClass]) }}>
    {{ $slot }}
</a>
