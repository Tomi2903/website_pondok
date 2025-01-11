@extends('welcome')

@section('title', 'Daftar Santri')

@section('content')
    <!-- Display Registered Data -->
    <section class="my-8 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-3xl text-center text-green-700 font-bold mb-6">DAFTAR SANTRI BARU</h2>

        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-green-600 text-white">
                    <th class="border border-gray-300 px-4 py-2">No</th>
                                <th class="border border-gray-300 px-4 py-2">ID</th>
                                <th class="border border-gray-300 px-4 py-2">Nama</th>
                                <th class="border border-gray-300 px-4 py-2">Status Diterima</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftaran as $key => $data)
                        <tr class="hover:bg-gray-100">
                            <td class="p-3 border border-gray-300 text-center">{{ $key + 1 }}</td>
                            <td class="p-3 border border-gray-300">{{ $data->id }}</td>
                            <td class="p-3 border border-gray-300">{{ $data->nama_santri_baru }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if($pendaftaran->isEmpty())
            <p class="text-center text-gray-600 mt-4">Belum ada data pendaftaran.</p>
        @endif
    </section>
@endsection
