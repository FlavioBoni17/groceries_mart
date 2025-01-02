<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceriesMart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-blue-700 text-white flex justify-between items-center px-6 py-4">
        <div class="text-xl font-bold">GroceriesMart</div>
        <nav class="flex space-x-6">
            <a href="#" class="hover:text-yellow-400">Home</a>
            <a href="#" class="hover:text-yellow-400">Kategori</a>
            <a href="shop.php" class="hover:text-yellow-400">Belanja</a>
            <a href="contact.php" class="hover:text-yellow-400">Kontak kami</a>
        </nav>
        <div class="flex items-center space-x-6">
            <!-- Live Search -->
            <div class="relative flex-grow">
              <input type="text" id="live-search" placeholder="Cari produk..." 
              class="w-full max-w-2xl px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-yellow-400 focus:outline-none">
              <ul id="search-results" 
              class="absolute left-0 top-full mt-1 max-w-2xl bg-white border border-gray-300 rounded shadow-md max-h-48 overflow-y-auto overflow-x-hidden z-10 hidden">
              </ul>
            </div>


            <!-- Keranjang -->
            <a href="{{url('/cart')}}" class="relative text-white hover:text-yellow-400">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="absolute -top-1 -right-2 bg-red-500 text-xs text-white w-5 h-5 flex items-center justify-center rounded-full">0</span>
            </a>
            <!-- Login -->
            @if (Route::has('login'))
                @auth

                <a href="">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </a>

                    <form style="padding: 10px" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-400" value="logout">Logout</button>
                    </form>
                @else
            <a href="{{url('/login')}}" class="flex items-center space-x-1 hover:text-yellow-400">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Login</span>
            </a>
            <!-- Register -->
            <a href="{{url('/register')}}" class="flex items-center space-x-1 hover:text-yellow-400">
                <i class="fa fa-vcard" aria-hidden="true"></i>
                <span>Register</span>
            </a>

            @endauth
        @endif

        </div>
    </header>

    <!-- Live Search Script -->
    {{-- <script>
        const products = ["Saos", "Goodday", "Frisainflag", "Indomie", "Filma", "Roti", "Oreo"];

        function liveSearch() {
            const input = document.getElementById("live-search").value.toLowerCase();
            const results = document.getElementById("search-results");
            results.innerHTML = "";

            if (input.length > 0) {
                const filtered = products.filter(product =>
                    product.toLowerCase().includes(input)
                );
                filtered.forEach(product => {
                    const li = document.createElement("li");
                    li.textContent = product;
                    li.className = "px-4 py-2 cursor-pointer hover:bg-yellow-400 hover:text-white";
                    results.appendChild(li);
                });
            }
        }
    </script> --}}
</body>
</html>
