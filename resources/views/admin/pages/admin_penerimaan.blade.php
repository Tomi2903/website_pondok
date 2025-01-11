@extends('admin.layouts.app') <!-- Menggunakan layout utama jika ada -->

@section('content')
            <section class="my-8 p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-3xl text-center text-green-700 font-bold mb-6">PENERIMAAN SANTRI BARU</h2>
                <div class="flex justify-end mb-4">
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
                                <th class="border border-gray-300 px-4 py-2">ID</th>
                                <th class="border border-gray-300 px-4 py-2">Nama</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </section>

            <script>
                function searchTable() {
                    const input = document.getElementById("search");
                    const filter = input.value.toLowerCase();
                    const table = document.getElementById("penerimaans");
                    const rows = table.getElementsByTagName("tr");

                    for (let i = 1; i < rows.length; i++) {
                        const cells = rows[i].getElementsByTagName("td");
                        let match = false;

                        for (let j = 0; j < cells.length; j++) {
                            if (cells[j] && cells[j].innerText.toLowerCase().includes(filter)) {
                                match = true;
                                break;
                            }
                        }

                        rows[i].style.display = match ? "" : "none";
                    }
                }
            </script>
@endsection