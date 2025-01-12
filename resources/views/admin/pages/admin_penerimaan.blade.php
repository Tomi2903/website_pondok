@extends('admin.layouts.app')

@section('content')
<section class="my-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-3xl text-center text-green-700 font-bold mb-6">PENERIMAAN SANTRI BARU</h2>
    <div class="flex justify-between mb-4">
        <form action="{{ route('penerimaan.copyPendaftaran') }}" method="POST">
            @csrf
            <button
                type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700"
            >
                Copy Data Pendaftaran
            </button>
        </form>
        <button
            class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700"
            onclick="openModal()"
        >
            Tambah Manual
        </button>
        <input
            type="text"
            id="search"
            placeholder="Cari Nama..."
            class="w-1/3 p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500"
            onkeyup="searchTable()"
        />
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border border-gray-300" id="santriTable">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">No</th>
                    <th class="border border-gray-300 px-4 py-2">Nama</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penerimaan as $key => $data)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $key + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $data->nama_santri_baru }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <form action="{{ route('penerimaan.updateStatus', $data->penerimaan_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <select
                                name="status_pendaftaran"
                                class="p-2 border border-gray-300 rounded-md"
                                onchange="this.form.submit()"
                            >
                                <option value="1" {{ $data->status_pendaftaran == 1 ? 'selected' : '' }}>Diterima</option>
                                <option value="0" {{ $data->status_pendaftaran == 0 ? 'selected' : '' }}>Tidak Diterima</option>
                            </select>
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

<!-- Modal -->
<div id="manualInputModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
        <h2 class="text-xl font-bold mb-4">Tambah Data Penerimaan</h2>
        <form action="{{ route('penerimaan.storeManual') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="id_pendaftaran" class="block text-sm font-medium text-gray-700">Pilih Pendaftaran</label>
                <select
                    name="id_pendaftaran"
                    id="id_pendaftaran"
                    class="w-full p-2 border border-gray-300 rounded-md select2"
                >
                    <option value="">-- Pilih Pendaftaran --</option>
                    @foreach($pendaftarans as $pendaftaran)
                        <option value="{{ $pendaftaran->id }}">{{ $pendaftaran->id }} - {{ $pendaftaran->nama_santri_baru }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="status_diterima" class="block text-sm font-medium text-gray-700">Status</label>
                <select
                    name="status_diterima"
                    id="status_diterima"
                    class="w-full p-2 border border-gray-300 rounded-md"
                >
                    <option value="1">Diterima</option>
                    <option value="0">Tidak Diterima</option>
                </select>
            </div>
            <div class="flex justify-end">
                <button type="button" class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400" onclick="closeModal()">Batal</button>
                <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('manualInputModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('manualInputModal').classList.add('hidden');
    }
</script>
@endsection