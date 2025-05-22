<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Barbershop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to right, #141e30, #243b55);
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
<body class="flex justify-center items-center h-screen">

    <div class="bg-gray-800 bg-opacity-90 p-8 rounded-xl shadow-2xl w-96 fade-in">
        <div class="flex justify-center mb-4">
            <img src="https://cdn-icons-png.flaticon.com/512/2965/2965567.png" alt="Logo" class="w-20 h-20">
        </div>
        <h2 class="text-white text-3xl font-bold text-center mb-6">Login</h2>

        @if ($errors->any())
            <div class="bg-red-600 text-white p-3 mb-4 rounded-lg text-sm">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-400 text-sm font-medium mb-2">Username</label>
                <input type="text" name="username" placeholder="Masukkan Username"
                    class="w-full px-4 py-3 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    value="{{ old('username') }}" required>
            </div>

            <div>
                <label class="block text-gray-400 text-sm font-medium mb-2">Password</label>
                <input type="password" name="password" placeholder="Masukkan Password"
                    class="w-full px-4 py-3 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-300">
                Login
            </button>
        </form>
    </div>

</body>
</html>
