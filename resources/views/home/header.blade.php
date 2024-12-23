<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceriesMart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">GroceriesMart</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Kategori</a>
            <a href="shop.html">Belanja</a>
            <a href="contact.html">Kontak kami</a>
        </nav>
        <div class="user_option">
            <!-- Live Search -->
            <div class="search-container">
                <input type="text" id="live-search" placeholder="Cari produk..." onkeyup="liveSearch()">
                <ul id="search-results"></ul>
            </div>
            <!-- Keranjang -->
            <a href="{{url('/cart')}}" class="cart-icon">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="cart-count">0</span>
            </a>
            <a href="{{url('/login')}}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Login</span>
            </a>
            <a href="{{url('/register')}}">
                <i class="fa fa-vcard" aria-hidden="true"></i>
                <span>Register</span>
            </a>
        </div>
    </header>

    <script>
        
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
                    results.appendChild(li);
                });
            }
        }
    </script>
</body>
</html>
