<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }
        .fade-in {
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 1s ease-out forwards;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="flex justify-center items-center h-screen text-white">

    <div class="bg-gray-900 bg-opacity-80 p-10 rounded-2xl shadow-2xl w-full max-w-md fade-in text-center">
        <h1 class="text-4xl font-bold mb-4">Selamat Datang</h1>
        <p class="mb-8 text-gray-300">Silakan pilih peran Anda untuk melanjutkan</p>

        <div class="flex flex-col gap-4">
            <a href="{{ url('/users/layanan') }}" class="bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg font-semibold transition duration-300">
                Saya Pelanggan
            </a>
            <a href="{{ url('/auth/login') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition duration-300">
                Karyawan / Admin
            </a>
        </div>
    </div>

</body>
</html>
