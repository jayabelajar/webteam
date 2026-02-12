@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-6xl">
    <x-page-title
        title="Prestasi"
        accent="4 Member Tim"
        subtitle="Pencapaian utama dari masing-masing anggota kelompok."
    />

    <div class="mt-8 space-y-6">
        @foreach($members as $member)
            <section class="rounded-xl border border-slate-200 bg-white p-5">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <x-member-identity :member="$member" :showRole="false" />
                    <span class="inline-flex w-fit items-center rounded-full border border-blue-100 bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">
                        {{ $member['role'] }}
                    </span>
                </div>

                <div class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    @foreach($member['prestasi'] as $item)
                        <article class="rounded-md border border-slate-200 bg-white p-4">
                            <p class="text-xs font-semibold text-blue-600">{{ $item['tahun'] }}</p>
                            <h3 class="mt-1 text-base font-bold text-slate-900">{{ $item['judul'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $item['keterangan'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>

    <section class="mt-8 rounded-xl border border-slate-200 bg-white p-5">
        <h2 class="text-xl font-bold text-slate-900">Proyek Kelompok</h2>
        <p class="mt-2 text-slate-600">Daftar proyek utama yang dikerjakan bersama oleh tim.</p>

        <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($projects as $project)
                <article class="rounded-md border border-slate-200 bg-white p-4">
                    <h3 class="text-lg font-bold text-slate-900">{{ $project['nama'] }}</h3>
                    <p class="mt-1 text-sm font-semibold text-blue-700">{{ $project['stack'] }}</p>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $project['ringkasan'] }}</p>
                    <p class="mt-3 text-xs font-semibold text-slate-500">Tim: {{ implode(', ', $project['anggota']) }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
        <x-action-button :href="route('menu3')" variant="secondary">
            Kembali ke Pendidikan
        </x-action-button>
        <x-action-button :href="route('menu1')" variant="primary">
            Kembali ke Home
        </x-action-button>
    </div>
</section>
@endsection
