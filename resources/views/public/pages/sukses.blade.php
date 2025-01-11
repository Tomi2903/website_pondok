<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Sukses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .notification-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .notification-container h1 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #10b981;
        }

        .notification-container p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #4b5563;
        }

        .notification-container a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #10b981;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .notification-container a:hover {
            background-color: #059669;
        }
    </style>
</head>
<body>
    <div class="notification-container">
        <h1>Registrasi Berhasil!</h1>
        <p>Selamat! Pendaftaran Anda telah berhasil. Silakan melanjutkan ke halaman berikutnya.</p>
        <a href="{{ route('home') }}">Kembali ke Beranda</a>
    </div>
</body>
</html>