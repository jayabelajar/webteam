@extends('layouts.admin')

@section('topbar-actions')
@endsection

@section('content')
<section class="space-y-6">
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <article class="rounded-2xl border border-slate-200 bg-white p-5">
            <p class="text-sm text-slate-500">Data Biodata</p>
            <p class="mt-1 text-2xl font-bold text-slate-900">{{ count($members) }}</p>
        </article>
        <article class="rounded-2xl border border-slate-200 bg-white p-5">
            <p class="text-sm text-slate-500">Data Pendidikan</p>
            <p class="mt-1 text-2xl font-bold text-slate-900">{{ $pendidikanCount }}</p>
        </article>
        <article class="rounded-2xl border border-slate-200 bg-white p-5">
            <p class="text-sm text-slate-500">Data Prestasi</p>
            <p class="mt-1 text-2xl font-bold text-slate-900">{{ $prestasiCount }}</p>
        </article>
        <article class="rounded-2xl border border-slate-200 bg-white p-5">
            <p class="text-sm text-slate-500">Data Proyek</p>
            <p class="mt-1 text-2xl font-bold text-slate-900">{{ count($projects) }}</p>
        </article>
    </div>

    <section class="rounded-2xl border border-slate-200 bg-white p-5">
        <h2 class="text-lg font-semibold text-blue-700">Grafik Data</h2>
        <p class="mt-1 text-sm text-slate-600">Visual ringkas jumlah data per kategori.</p>

        <div class="mt-5 grid gap-6 lg:grid-cols-2">
            <div class="space-y-3">
                <div>
                    <div class="mb-1 flex items-center justify-between text-sm">
                        <span class="text-blue-700">Biodata</span>
                        <span class="font-semibold text-slate-800">{{ count($members) }}</span>
                    </div>
                    <div class="h-2 rounded-full bg-slate-100">
                        <div class="h-2 w-[60%] rounded-full bg-blue-500"></div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 flex items-center justify-between text-sm">
                        <span class="text-blue-700">Pendidikan</span>
                        <span class="font-semibold text-slate-800">{{ $pendidikanCount }}</span>
                    </div>
                    <div class="h-2 rounded-full bg-slate-100">
                        <div class="h-2 w-[80%] rounded-full bg-blue-500"></div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 flex items-center justify-between text-sm">
                        <span class="text-blue-700">Prestasi</span>
                        <span class="font-semibold text-slate-800">{{ $prestasiCount }}</span>
                    </div>
                    <div class="h-2 rounded-full bg-slate-100">
                        <div class="h-2 w-[70%] rounded-full bg-blue-400"></div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 flex items-center justify-between text-sm">
                        <span class="text-blue-700">Proyek</span>
                        <span class="font-semibold text-slate-800">{{ count($projects) }}</span>
                    </div>
                    <div class="h-2 rounded-full bg-slate-100">
                        <div class="h-2 w-[45%] rounded-full bg-blue-400"></div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <div class="relative h-44 w-44 rounded-full bg-slate-100">
                    <div class="absolute inset-0 rounded-full border-[16px] border-blue-500 border-r-slate-300 border-b-blue-400 border-l-blue-400"></div>
                    <div class="absolute inset-7 flex items-center justify-center rounded-full bg-white text-center">
                        <div>
                            <p class="text-xs text-slate-500">Total Data</p>
                            <p class="text-2xl font-bold text-slate-900">{{ count($members) + $pendidikanCount + $prestasiCount + count($projects) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
