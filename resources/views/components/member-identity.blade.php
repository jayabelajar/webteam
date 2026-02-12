@props([
    'member',
    'showRole' => true,
    'nameClass' => 'text-lg',
])

<div class="flex items-center gap-3">
    <img
        src="{{ $member['avatar'] }}"
        alt="Foto {{ $member['nama'] }}"
        class="h-12 w-12 rounded-md border border-slate-200 object-cover"
    >
    <div>
        <p class="text-xs font-medium text-blue-600">Member {{ $member['id'] }}</p>
        <h2 class="{{ $nameClass }} font-bold text-slate-900">{{ $member['nama'] }}</h2>
        @if($showRole)
            <p class="text-sm font-semibold text-blue-700">{{ $member['role'] }}</p>
        @endif
    </div>
</div>
