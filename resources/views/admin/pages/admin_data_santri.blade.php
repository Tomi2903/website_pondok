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
                </tr>
            </thead>
        
        </table>
    </div>
</section>
@endsection
