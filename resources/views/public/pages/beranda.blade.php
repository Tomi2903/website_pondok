@extends('welcome')

@section('title', 'Beranda')

@section('content')
<section class="relative">
    <img class="w-full h-80 object-cover" src="{{ asset('img/beranda.png') }}" alt="Hero Image">
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h2 class="text-4xl text-yellow-200 font-bold">PPDB PP. TARBIYATUS SHOLIHIN</h2>
    </div>
</section>

<section class="my-8 p-6 bg-green-600 rounded-lg">
    <div class="flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2 space-y-4">
            <h2 class="text-4xl text-white font-bold">Pondok Pesantren Tarbiyatus Sholihin</h2>
            <p class="text-yellow-200 text-lg">
                Pondok ini didirikan oleh KH. Sunanuddin. Pondok ini menyediakan berbagai fasilitas yang baik dan layak,
                serta beberapa layanan unggulan untuk santri.
            </p>
        </div>
        <div class="lg:w-1/2">
            <img class="rounded-lg shadow-md" src="{{ asset('img/beranda1.png') }}" alt="About Image">
        </div>
    </div>
</section>
@endsection
