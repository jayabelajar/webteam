@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-6xl space-y-8">
    <div class="rounded-xl border border-slate-200 bg-white px-5 py-7 sm:px-8 sm:py-9">
        <p class="inline-flex items-center rounded-md border border-blue-100 bg-blue-50 px-2.5 py-1 text-xs font-medium text-blue-700">
            VeritasDev Team
        </p>

        <h1 class="mt-4 max-w-3xl text-xl font-bold leading-tight text-slate-900 sm:text-4xl">
            {{ $teamName }}
        </h1>

        <p class="mt-4 max-w-3xl text-base leading-relaxed text-slate-600 sm:text-lg">
            {{ $teamTagline }}
        </p>

        <div class="mt-7 flex flex-col gap-3 sm:flex-row">
            <x-action-button :href="route('menu2')" variant="primary">
                Lihat Biodata Member
            </x-action-button>
            <x-action-button :href="route('menu4')" variant="secondary">
                Lihat Prestasi Tim
            </x-action-button>
        </div>
    </div>

    <section>
        <div class="flex flex-col items-start justify-between gap-2 sm:flex-row sm:items-center sm:gap-3">
            <h2 class="text-xl font-bold text-slate-900">4 Member Tim</h2>
            <a href="{{ route('menu3') }}" class="text-sm font-semibold text-blue-700 hover:text-blue-800">Riwayat Pendidikan</a>
        </div>

        <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($members as $member)
                <article class="rounded-xl border border-slate-200 bg-white p-4">
                    <x-member-identity :member="$member" nameClass="text-base" />
                    <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $member['bio'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section>
        <div class="flex flex-col items-start justify-between gap-2 sm:flex-row sm:items-center sm:gap-3">
            <h2 class="text-xl font-bold text-slate-900">Proyek Kelompok</h2>
            <a href="{{ route('menu4') }}" class="text-sm font-semibold text-blue-700 hover:text-blue-800">Lihat Detail Prestasi</a>
        </div>

        <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($projects as $project)
                <article class="rounded-xl border border-slate-200 bg-white p-4">
                    <h3 class="text-base font-semibold text-slate-900">{{ $project['nama'] }}</h3>
                    <p class="mt-1 text-sm font-semibold text-slate-700">{{ $project['stack'] }}</p>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $project['ringkasan'] }}</p>
                    <p class="mt-3 text-xs font-semibold text-blue-600">Tim: {{ implode(', ', $project['anggota']) }}</p>
                </article>
            @endforeach
        </div>
    </section>
</section>
@endsection
