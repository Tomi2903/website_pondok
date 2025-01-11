<header class="flex items-center justify-between p-4 bg-green-800 shadow-md">
    <div class="flex items-center space-x-4">
        <img class="w-16 h-16" src="{{ asset('img/logo.png') }}" alt="Logo">
        <h1 class="text-2xl text-yellow-200 font-bold">PP. Tarbiatus Sholihin</h1>
    </div>
    <nav class="hidden md:flex space-x-6">
        <a href="{{ url('/') }}" class="text-white hover:text-yellow-300">Home</a>
        <a href="{{ url('/profil') }}" class="text-white hover:text-yellow-300">Profil</a>
        <a href="{{ url('/pendaftaran') }}" class="text-white hover:text-yellow-300">Daftar</a>
        <a href="{{ url('/informasi') }}" class="text-white hover:text-yellow-300">Informasi</a>
    </nav>
    <div class="flex space-x-4">
        <a href="{{ url('/login') }}" class="px-4 py-2 bg-yellow-400 text-gray-800 rounded-md shadow hover:bg-yellow-300">Login</a>
        <a href="{{ url('/pendaftaran') }}" class="px-4 py-2 bg-green-500 text-white rounded-md shadow hover:bg-green-400">Pendaftaran Santri Baru</a>
    </div>
</header>
