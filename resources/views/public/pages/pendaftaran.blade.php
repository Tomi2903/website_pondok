@extends('welcome ')

@section('title', 'Pendaftaran')

@section('content')
        <!-- Registration Form Section -->
        <section class="my-8 p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-3xl text-center text-green-700 font-bold mb-6">FORMULIR PENDAFTARAN SANTRI BARU</h2>
            <form action="{{ route('savep') }}" method="post" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="nama_santri_baru" class="block text-gray-700 font-medium">Nama</label>
                        <input
                            type="text"
                            id="nama_santri_baru"
                            name="nama_santri_baru"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="alamat" class="block text-gray-700 font-medium">Alamat</label>
                        <input
                            type="text"
                            id="alamat"
                            name="alamat"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="tgl" class="block text-gray-700 font-medium">Tanggal Lahir</label>
                        <input
                            type="date"
                            id="tgl"
                            name="tgl"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="nisn" class="block text-gray-700 font-medium">NISN</label>
                        <input
                            type="text"
                            id="nisn"
                            name="nisn"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="nama_orang_tua" class="block text-gray-700 font-medium">Nama Orang Tua</label>
                        <input
                            type="text"
                            id="nama_orang_tua"
                            name="nama_orang_tua"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="asal_sekolah" class="block text-gray-700 font-medium">Asal Sekolah</label>
                        <input
                            type="text"
                            id="asal_sekolah"
                            name="asal_sekolah"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="nomor_telepon" class="block text-gray-700 font-medium">Nomor Telepon</label>
                        <input
                            type="tel"
                            id="nomor_telepon"
                            name="nomor_telepon"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
                            required
                        />
                    </div>
                    <div class="space-y-2">
                        <label for="jenis_kelamin" class="block text-gray-700 font-medium">Jenis Kelamin</label>
                        <select
                            id="jenis_kelamin"
                            name="jenis_kelamin"
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
                            required
                        >
                            <option value="">Pilih jenis kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button
                        type="submit"
                        class="px-6 py-3 bg-green-600 text-white font-medium rounded-md hover:bg-green-500 focus:ring-4 focus:ring-green-300"
                    >
                        Daftar
                    </button>
                </div>
            </form>
        </section>
        @endsection
