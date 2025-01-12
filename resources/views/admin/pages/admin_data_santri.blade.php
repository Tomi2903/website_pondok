@extends('admin.layouts.app') <!-- Menggunakan layout utama jika ada -->

@section('content')
<section class="my-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-3xl text-center text-green-700 font-bold mb-6">DATA PENDAFTAR CALON SANTRI BARU</h2>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-green-600 text-white">
                    <th class="p-3 border border-gray-300">No</th>
                    <th class="p-3 border border-gray-300">Nama</th>
                    <th class="p-3 border border-gray-300">Jenis Kelamin</th>
                    <th class="p-3 border border-gray-300">Alamat</th>
                    <th class="p-3 border border-gray-300">Nama Orang Tua</th>
                    <th class="p-3 border border-gray-300">NISN</th>
                    <th class="p-3 border border-gray-300">Asal Sekolah</th>
                    <th class="p-3 border border-gray-300">Nomor Telepon</th>
                    <th class="p-3 border border-gray-300">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendaftaran as $key => $data)
                <tr class="hover:bg-gray-100">
                    <td class="p-3 border border-gray-300 text-center">{{ $key + 1 }}</td>
                    <td class="p-3 border border-gray-300">{{ $data->nama_santri_baru }}</td>
                    <td class="p-3 border border-gray-300">{{ $data->jenis_kelamin }}</td>
                    <td class="p-3 border border-gray-300">{{ $data->alamat }}</td>
                    <td class="p-3 border border-gray-300">{{ $data->nama_orang_tua }}</td>
                    <td class="p-3 border border-gray-300">{{ $data->nisn }}</td>
                    <td class="p-3 border border-gray-300">{{ $data->asal_sekolah }}</td>
                    <td class="p-3 border border-gray-300">{{ $data->nomor_telepon }}</td>
                    <td class="p-3 border border-gray-300 text-center">
                        <a href="{{ route('admin.pendaftaran.edit', $data->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@if($pendaftaran->isEmpty())
    <p class="text-center text-gray-600 mt-4">Belum ada data pendaftaran.</p>
@endif
@endsection