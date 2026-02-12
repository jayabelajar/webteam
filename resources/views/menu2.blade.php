@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-6xl">
    <x-page-title
        title="Biodata"
        accent="4 Member Tim"
        subtitle="Ringkasan profil setiap anggota kelompok."
    />

    <div class="mt-8 grid gap-4 sm:grid-cols-2">
        @foreach($members as $member)
            <article class="rounded-xl border border-slate-200 bg-white p-5">
                <x-member-identity :member="$member" />

                <div class="mt-4 space-y-3 text-sm text-slate-700">
                    <div class="rounded-md border border-slate-200 bg-white p-3">
                        <p class="text-xs font-semibold text-slate-500">Domisili</p>
                        <p class="mt-1 font-semibold text-slate-900">{{ $member['domisili'] }}</p>
                    </div>
                    <div class="rounded-md border border-slate-200 bg-white p-3">
                        <p class="text-xs font-semibold text-slate-500">Email</p>
                        <p class="mt-1 font-semibold text-slate-900 break-all">{{ $member['email'] }}</p>
                    </div>
                    <div class="rounded-md border border-slate-200 bg-white p-3">
                        <p class="text-xs font-semibold text-slate-500">No HP</p>
                        <p class="mt-1 font-semibold text-slate-900">{{ $member['no_hp'] }}</p>
                    </div>
                    <div class="rounded-md border border-slate-200 bg-white p-3">
                        <p class="text-xs font-semibold text-slate-500">Skills</p>
                        <p class="mt-1 font-semibold text-slate-900">{{ implode(', ', $member['skills']) }}</p>
                    </div>
                </div>
            </article>
        @endforeach
    </div>

    <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
        <x-action-button :href="route('menu1')" variant="secondary">
            Kembali ke Home
        </x-action-button>
        <x-action-button :href="route('menu3')" variant="primary">
            Lihat Pendidikan Tim
        </x-action-button>
    </div>
</section>
@endsection
