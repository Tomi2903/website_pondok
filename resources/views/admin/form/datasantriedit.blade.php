@extends('admin.layouts.app')

@section('content')
<section class="my-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-3xl text-center text-green-700 font-bold mb-6">EDIT DATA PENDAFTAR</h2>

    <form action="{{ route('admin.pendaftaran.update', $pendaftaran->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nama_santri_baru" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama_santri_baru" id="nama_santri_baru" value="{{ $pendaftaran->nama_santri_baru }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>

        <div>
            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                <option value="Laki-laki" {{ $pendaftaran->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $pendaftaran->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div>
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="{{ $pendaftaran->alamat }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>

        <div>
            <label for="nama_orang_tua" class="block text-sm font-medium text-gray-700">Nama Orang Tua</label>
            <input type="text" name="nama_orang_tua" id="nama_orang_tua" value="{{ $pendaftaran->nama_orang_tua }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>

        <div>
            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
            <input type="text" name="nisn" id="nisn" value="{{ $pendaftaran->nisn }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>

        <div>
            <label for="asal_sekolah" class="block text-sm font-medium text-gray-700">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" value="{{ $pendaftaran->asal_sekolah }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>

        <div>
            <label for="nomor_telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ $pendaftaran->nomor_telepon }}" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>

        <div>
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Update</button>
        </div>
    </form>
</section>
@endsection