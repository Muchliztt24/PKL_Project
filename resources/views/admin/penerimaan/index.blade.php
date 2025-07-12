@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="w-full px-6 py-6 mx-auto">
            <h1 class="text-2xl font-bold">Persetujuan</h1>

            <div class="relative w-full max-w-6xl mx-auto overflow-x-auto bg-white shadow-xl rounded-2xl p-6">
                <h3 class="text-lg font-semibold mb-4">Menunggu Persetujuan</h3>

                <!-- Tombol tambah -->
                <!-- Tabel MENUNGGU -->
                <table class="border-table min-w-full text-slate-500">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left">Nama Siswa</th>
                            <th class="px-6 py-3 text-left">Nama Eskul</th>
                            <th class="px-6 py-3 text-left">Tahun Ajaran</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($menunggu as $item)
                            <tr>
                                <td class="px-6 py-3 text-left">{{ $item->user->name }}</td>
                                <td class="px-6 py-3 text-left">{{ $item->eskul->nama_eskul }}</td>
                                <td class="px-6 py-3 text-left">{{ $item->tahun_ajaran }}</td>
                                <td class="flex gap-2">
                                    <form action="/admin/penerimaan/approve-menunggu" method="POST">
                                        @csrf
                                        <input type="hidden" name="daftar_id" value="{{ $item->id }}">
                                        <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                    </form>

                                    <form action="/admin/penerimaan/reject-menunggu" method="POST">
                                        @csrf
                                        <input type="hidden" name="daftar_id" value="{{ $item->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-slate-400 py-3">Tidak ada data yang tersedia</td>
                            </tr>   
                        @endforelse
                    </tbody>
                </table>

                <!-- Tabel DISETUJUI -->
                <h6 class="text-lg font-semibold mb-2">Disetujui</h6>
                <table class="min-w-full mb-10 text-slate-500">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left">No</th>
                            <th class="px-6 py-3 text-left">Nama Siswa</th>
                            <th class="px-6 py-3 text-left">Kelas</th>
                            <th class="px-6 py-3 text-left">Persetujuan</th>
                            <th class="px-6 py-3 text-left">Eskul</th>
                            <th class="px-6 py-3 text-left">Catatan</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Tahun Ajaran</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($disetujui as $item)
                            <tr>
                                <td class="px-6 py-3">{{ $loop->iteration }}</td>
                                <td class="px-6 py-3">{{ $item->daftarEskul->user->name }}</td>
                                <td class="px-6 py-3">{{ $item->daftarEskul->kelas ?? '-' }}</td>
                                <td class="px-6 py-3">{{ $item->persetujuan }}</td>
                                <td class="px-6 py-3">{{ $item->daftarEskul->eskul->nama_eskul }}</td>
                                <td class="px-6 py-3">{{ $item->catatan ?? '-' }}</td>
                                <td>
                                    <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                                        Disetujui
                                    </span>
                                </td>
                                <td class="px-6 py-3">{{ $item->daftarEskul->tahun_ajaran }}</td>
                                <td>
                                <form action="{{ route('admin.penerimaan.destroy', $item) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-slate-400 py-3">Tidak ada data yang tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Tabel DITOLAK -->
                <h6 class="text-lg font-semibold mb-2">Ditolak</h6>
                <table class="min-w-full text-slate-500">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left">No</th>
                            <th class="px-6 py-3 text-left">Nama Siswa</th>
                            <th class="px-6 py-3 text-left">Kelas</th>
                            <th class="px-6 py-3 text-left">Persetujuan</th>
                            <th class="px-6 py-3 text-left">Eskul</th>
                            <th class="px-6 py-3 text-left">Catatan</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Tahun Ajaran</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ditolak as $item)
                            <tr>
                                <td class="px-6 py-3">{{ $loop->iteration }}</td>
                                <td class="px-6 py-3">{{ $item->daftarEskul->user->name }}</td>
                                <td class="px-6 py-3">{{ $item->daftarEskul->kelas}}</td>
                                <td class="px-6 py-3">{{ $item->persetujuan }}</td>
                                <td class="px-6 py-3">{{ $item->daftarEskul->eskul->nama_eskul }}</td>
                                <td class="px-6 py-3">{{ $item->catatan ?? '-' }}</td>
                                <td class="px-6 py-3">
                                    <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                                        Ditolak
                                    </span>
                                </td>
                                <td class="px-6 py-3">{{ $item->daftarEskul->tahun_ajaran }}</td>
                                <td>
                                <form action="{{ route('admin.penerimaan.destroy', $item) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-slate-400 py-3">Tidak ada data yang tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
