@extends('layouts.admin')

@section('topbar-actions')
@endsection

@section('content')
<section class="space-y-4">
    <div class="flex justify-end">
        <button type="button" class="rounded-lg bg-blue-600 px-3 py-2 text-xs font-semibold text-white">+ Tambah Data</button>
    </div>

    <section class="overflow-hidden rounded-2xl border border-slate-200 bg-white">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="bg-slate-50 text-slate-500">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Member</th>
                        <th class="px-4 py-3 font-semibold">Periode</th>
                        <th class="px-4 py-3 font-semibold">Instansi</th>
                        <th class="px-4 py-3 font-semibold">Jurusan</th>
                        <th class="px-4 py-3 text-right font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rows as $row)
                        <tr class="border-t border-slate-100">
                            <td class="px-4 py-3">
                                <p class="font-medium text-slate-900">{{ $row['member'] }}</p>
                                <p class="text-xs text-slate-500">{{ $row['role'] }}</p>
                            </td>
                            <td class="px-4 py-3 text-slate-700">{{ $row['tahun'] }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $row['instansi'] }}</td>
                            <td class="px-4 py-3 text-slate-700">{{ $row['jurusan'] }}</td>
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
