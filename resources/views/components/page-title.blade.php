@props([
    'title',
    'accent' => null,
    'subtitle' => null,
])

<div class="text-center">
    <h1 class="text-2xl font-bold text-slate-900 sm:text-4xl">
        {{ $title }}
        @if($accent)
            <span class="text-blue-600">{{ $accent }}</span>
        @endif
    </h1>

    @if($subtitle)
        <p class="mt-3 text-slate-600">
            {{ $subtitle }}
        </p>
    @endif
</div>
