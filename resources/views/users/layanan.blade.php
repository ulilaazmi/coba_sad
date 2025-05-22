<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Layanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(120deg, #1f4037, #99f2c8);
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
<body class="flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-2xl rounded-2xl w-full max-w-xl p-8 fade-in">
        <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Pilih Layanan</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- <form action="" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="layanan" class="block text-gray-700 font-semibold mb-2">Layanan yang Dipilih</label>
                <select name="layanan_id" id="layanan" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-400" required>
                    <option value="" disabled selected>-- Pilih Layanan --</option>
                    @foreach ($layanans as $layanan)
                        <option value="{{ $layanan->id }}">{{ $layanan->nama_layanan }} - Rp{{ number_format($layanan->harga) }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition duration-300 font-semibold">
                Ambil Nomor Antrian
            </button>
        </form> --}}
    </div>

</body>
</html>
