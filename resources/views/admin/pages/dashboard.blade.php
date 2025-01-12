@extends('admin.layouts.app')

@section('content')
<section class="my-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-3xl text-center text-green-700 font-bold mb-6">Dashboard Potensial</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Total Registrants -->
        <div class="p-4 bg-blue-100 rounded-lg shadow-md">
            <h3 class="text-xl font-bold">Total Pendaftar</h3>
            <p class="text-2xl">{{ $totalPendaftarans }}</p>
        </div>

        <!-- Accepted and Rejected Applicants -->
        <div class="p-4 bg-green-100 rounded-lg shadow-md">
            <h3 class="text-xl font-bold">Status Penerimaan</h3>
            <p>Diterima: {{ $totalDiterima }}</p>
            <p>Ditolak: {{ $totalDitolak }}</p>
        </div>

        <!-- Gender Distribution -->
        <div class="p-4 bg-yellow-100 rounded-lg shadow-md">
            <h3 class="text-xl font-bold">Distribusi Jenis Kelamin</h3>
            <canvas id="genderChart"></canvas>
        </div>

        <!-- School Distribution -->
        <div class="p-4 bg-purple-100 rounded-lg shadow-md">
            <h3 class="text-xl font-bold">Distribusi Asal Sekolah</h3>
            <canvas id="schoolChart"></canvas>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Gender Distribution Chart
    const genderCtx = document.getElementById('genderChart').getContext('2d');
    new Chart(genderCtx, {
        type: 'pie',
        data: {
            labels: @json(array_keys($genderDistribution->toArray())),
            datasets: [{
                data: @json(array_values($genderDistribution->toArray())),
                backgroundColor: ['#FF6384', '#36A2EB']
            }]
        }
    });

    // School Distribution Chart
    const schoolCtx = document.getElementById('schoolChart').getContext('2d');
    new Chart(schoolCtx, {
        type: 'bar',
        data: {
            labels: @json(array_keys($schoolDistribution->toArray())),
            datasets: [{
                data: @json(array_values($schoolDistribution->toArray())),
                backgroundColor: '#4CAF50'
            }]
        },
        options: {
            scales: {
                x: {
                    title: { display: true, text: 'Asal Sekolah' }
                },
                y: {
                    title: { display: true, text: 'Jumlah' },
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection