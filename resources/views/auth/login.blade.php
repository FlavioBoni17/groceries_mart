<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Groceries Mart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 font-sans">
    <div class="flex h-screen justify-center items-center">
        <div class="bg-white rounded-lg shadow-md p-8 max-w-sm w-full text-center">
            <h1 class="text-2xl font-bold mb-4">Login</h1>
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <input 
                    type="text" 
                    name="email" 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                    placeholder="Email" 
                    required 
                    autofocus
                >
                <input 
                    type="password" 
                    name="password" 
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                    placeholder="Password" 
                    required
                >
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition"
                >
                    Login
                </button>
            </form>
            <!-- Fitur Lupa Password -->
            <a 
                href="{{ route('password.request') }}" 
                class="block mt-4 text-blue-600 text-sm hover:underline"
            >
                Lupa Password?
            </a>
        </div>
    </div>
</body>
</html>
