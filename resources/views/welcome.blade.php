<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PP. Tarbiatus Sholihin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-700 font-sans text-gray-900">
    <div class="max-w-7xl mx-auto">
        <!-- Navbar -->
        @include('public.components.navbar')

        <!-- Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('public.components.footer')
    </div>
</body>
</html>
