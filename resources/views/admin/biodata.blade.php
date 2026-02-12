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
            <input type="text" placeholder="Cari nama member..." class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-slate-500">
            <select class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-slate-500">
                <option>Semua Role</option>
                <option>Backend Developer</option>
                <option>Frontend Developer</option>
                <option>Fullstack Developer</option>
                <option>QA and Project Coordinator</option>
            </select>
            <select class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-slate-500">
                <option>Semua Domisili</option>
                @foreach($members as $member)
                    <option>{{ $member['domisili'] }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="bg-slate-50 text-slate-500">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Nama</th>
                        <th class="px-4 py-3 font-semibold">Role</th>
                        <th class="px-4 py-3 font-semibold">Email</th>
                        <th class="px-4 py-3 font-semibold">Domisili</th>
                        <th class="px-4 py-3 text-right font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr class="border-t border-slate-100">
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $member['nama'] }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $member['role'] }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $member['email'] }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $member['domisili'] }}</td>
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
</section>
@endsection
