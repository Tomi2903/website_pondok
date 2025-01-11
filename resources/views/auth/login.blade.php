<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PPDB PONDOK PESANTREN TARBIYATUS SHOLIHIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('{{ asset('img/login.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            backdrop-filter: blur(10px); /* Blur entire background */
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Overlay color */
            z-index: 0;
        }

        .content-container {
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.8); /* Transparent background for the form */
            backdrop-filter: blur(10px); /* Blur effect for the form */
        }

        .content-container .rounded-lg {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="content-container bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <form id="login-form" action="{{ route('login'); }}" method="POST">
            @csrf
            <!-- Tambahkan logo di sini -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Pondok Pesantren" class="w-10 h-10">
            </div>
            <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
            <label for="email"class="block text-sm font-medium text-gray-700">Email</label>
            <input type="text" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            
            <label for="password" class="block text-sm font-medium text-gray-700 mt-4">Password</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            
            <div class="flex justify-between items-center mt-6">
                <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600" onclick="window.location.href='{{ url('/') }}'">Kembali</button>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Login</button>
            </div>
            
            <p id="error-message" class="text-red-500 text-sm mt-4 hidden">Username atau Password salah</p>
        </form>
    </div>
</body>

</html>
