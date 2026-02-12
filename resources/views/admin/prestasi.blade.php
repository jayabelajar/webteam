@extends('layouts.admin')

@section('topbar-actions')
@endsection

@section('content')
<section class="space-y-4">
    <div class="flex justify-end">
        <button type="button" class="rounded-lg bg-blue-600 px-3 py-2 text-xs font-semibold text-white">+ Tambah Data</button>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-4">
        <div class="grid gap-3 md:grid-cols-3">
            <input type="text" placeholder="Cari judul prestasi..." class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-slate-500">
            <select class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-slate-500">
                <option>Semua Tahun</option>
                <option>2025</option>
                <option>2024</option>
                <option>2023</option>
            </select>
            <select class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-slate-500">
                <option>Semua Member</option>
                @foreach($rows as $row)
                    <option>{{ $row['member'] }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="bg-slate-50 text-slate-500">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Judul Prestasi</th>
                        <th class="px-4 py-3 font-semibold">Member / Role</th>
                        <th class="px-4 py-3 font-semibold">Tahun</th>
                        <th class="px-4 py-3 text-right font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rows as $row)
                        <tr class="border-t border-slate-100">
                            <td class="px-4 py-3">
                                <p class="font-medium text-slate-900">{{ $row['judul'] }}</p>
                                <p class="text-xs text-slate-500">{{ $row['keterangan'] }}</p>
                            </td>
                            <td class="px-4 py-3">
                                <p class="text-slate-700">{{ $row['member'] }}</p>
                                <p class="text-xs text-slate-500">{{ $row['role'] }}</p>
                            </td>
                            <td class="px-4 py-3 text-slate-700">{{ $row['tahun'] }}</td>
                            <td class="px-4 py-3">
                                <div class="flex justify-end gap-2">
                                    <button class="rounded-md border border-slate-300 px-2.5 py-1 text-xs font-semibold text-slate-700">Detail</button>
                                    <button class="rounded-md border border-slate-300 px-2.5 py-1 text-xs font-semibold text-slate-700">Edit</button>
                                    <button class="rounded-md border border-red-200 px-2.5 py-1 text-xs font-semibold text-red-600">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <section class="rounded-2xl border border-slate-200 bg-white p-5">
        <h2 class="text-base font-semibold text-slate-900">Data Proyek Terkait</h2>
        <div class="mt-3 grid gap-3 md:grid-cols-2 lg:grid-cols-3">
            @foreach($projects as $project)
                <article class="rounded-xl border border-slate-200 bg-slate-50 p-3">
                    <p class="font-medium text-slate-900">{{ $project['nama'] }}</p>
                    <p class="mt-1 text-xs text-slate-600">{{ $project['stack'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
</section>
@endsection
