<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Groceries Mart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 m-0 font-sans">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white rounded-lg shadow-lg p-8 text-center max-w-sm w-full">
            <h1 class="text-2xl mb-5 font-semibold">Register</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" class="w-full p-3 mb-4 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Username" required autofocus>
                <input type="email" name="email" class="w-full p-3 mb-4 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email" required>
                <input type="text" name="phone" class="w-full p-3 mb-4 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nomor Telepon" required>
                <input type="text" name="address" class="w-full p-3 mb-4 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Alamat" required>
                <input type="password" name="password" class="w-full p-3 mb-4 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password" required>
                <input type="password" name="password_confirmation" class="w-full p-3 mb-6 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Konfirmasi Password" required>
                <button type="submit" class="w-full py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Register</button>
            </form>
            <p class="mt-4 text-sm text-gray-600">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a></p>
        </div>
    </div>
</body>
</html>
