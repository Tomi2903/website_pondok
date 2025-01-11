@extends('admin.layouts.app') <!-- Menggunakan layout utama jika ada -->

@section('content')
<nav class="w-1/4 bg-green-700 text-white min-h-screen p-4">
    <div class="flex items-center mb-8">
    <img class="w-16 h-16" src="{{ asset('img/logo.png') }}" alt="Logo">
        <span class="font-bold text-lg">ADMIN PONDOK</span>
    </div>
    <ul class="space-y-4">
        <li><a href="{{ url('dashboard') }}" class="block hover:bg-green-600 rounded-lg px-4 py-2">Dashboard</a></li>
        <li><a href="{{ url('admin_data_santri') }}" class="block hover:bg-green-600 rounded-lg px-4 py-2">Data Santri</a></li>
        <li><a href="{{ url('admin_register') }}" class="block hover:bg-green-600 rounded-lg px-4 py-2">Tambahkan admin</a></li>
        <li><a href="{{ url('admin_penerimaan') }}" class="block hover:bg-green-600 rounded-lg px-4 py-2">Penerimaan</a></li>
        
        <form action="{{ route('logout'); }}" method="post">
            @csrf
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">LOG OUT</button>
        </form>
    </ul>
    
</nav>
