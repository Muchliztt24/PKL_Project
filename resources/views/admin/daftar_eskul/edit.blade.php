@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Edit Pendaftaran Ekstrakurikuler</h2>

    <form action="{{ route('admin.daftar_eskul.update', $daftar_Eskul) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="user_id" class="block font-medium">Nama Siswa</label>
            <select name="user_id" id="user_id" class="w-full border rounded px-3 py-2">
                @foreach($user as $u)
                    <option value="{{ $u->id }}" {{ $daftar_Eskul->user_id == $u->id ? 'selected' : '' }}>
                        {{ $u->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="kelas" class="block font-medium">Kelas</label>
            <input type="text" name="kelas" id="kelas" class="w-full border rounded px-3 py-2" value="{{ old('kelas', $daftar_Eskul->kelas) }}">
        </div>

        <div>
            <label for="eskul_id" class="block font-medium">Eskul</label>
            <select name="eskul_id" id="eskul_id" class="w-full border rounded px-3 py-2">
                @foreach($eskul as $e)
                    <option value="{{ $e->id }}" {{ $daftar_Eskul->eskul_id == $e->id ? 'selected' : '' }}>
                        {{ $e->nama_eskul }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="tahun_ajaran" class="block font-medium">Tahun Ajaran</label>
            <select name="tahun_ajaran" id="tahun_ajaran" class="w-full border rounded px-3 py-2">
                <option value="2020/2021" {{ $daftar_Eskul->tahun_ajaran == '2020/2021' ? 'selected' : '' }}>2020/2021</option>
                <option value="2021/2022" {{ $daftar_Eskul->tahun_ajaran == '2021/2022' ? 'selected' : '' }}>2021/2022</option>
                <option value="2022/2023" {{ $daftar_Eskul->tahun_ajaran == '2022/2023' ? 'selected' : '' }}>2022/2023</option>
                <option value="2023/2024" {{ $daftar_Eskul->tahun_ajaran == '2023/2024' ? 'selected' : '' }}>2023/2024</option>
                <option value="2024/2025" {{ $daftar_Eskul->tahun_ajaran == '2024/2025' ? 'selected' : '' }}>2024/2025</option>
            </select>
        </div>
        <div>
            <label for="no_telp" class="block font-medium">Nomor Telepon</label>
            <input type="text" name="no_telp" id="no_telp" class="w-full border rounded px-3 py-2" value="{{ old('no_telp', $daftar_Eskul->no_telp) }}">
        </div>

        <div>
            <label for="alasan" class="block font-medium">Alasan</label>
            <textarea name="alasan" id="alasan" rows="4" class="w-full border rounded px-3 py-2">{{ old('alasan', $daftar_Eskul->alasan) }}</textarea>
        </div>

        <div class="pt-4">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.daftar_eskul.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
