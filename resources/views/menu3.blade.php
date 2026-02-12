@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-6xl">
    <x-page-title
        title="Riwayat"
        accent="Pendidikan Member"
        subtitle="Setiap member memiliki dua riwayat pendidikan utama."
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

                <div class="mt-5 grid gap-4 sm:grid-cols-2">
                    @foreach($member['pendidikan'] as $p)
                        <article class="rounded-md border border-slate-200 bg-white p-4">
                            <p class="text-xs font-semibold text-blue-600">{{ $p['tahun'] }}</p>
                            <h3 class="mt-1 text-base font-bold text-slate-900">{{ $p['instansi'] }}</h3>
                            <p class="mt-1 font-semibold text-slate-700">{{ $p['jurusan'] }}</p>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $p['catatan'] }}</p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>

    <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
        <x-action-button :href="route('menu2')" variant="secondary">
            Kembali ke Biodata
        </x-action-button>
        <x-action-button :href="route('menu4')" variant="primary">
            Lihat Prestasi Tim
        </x-action-button>
    </div>
</section>
@endsection
