<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceriesMart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="font-sans bg-gray-50">
    <header class="bg-white shadow-md p-4 flex items-center">
        <div class="text-blue-500 font-bold text-xl mr-4">GroceriesMart</div>
        <select class="border border-gray-300 rounded px-3 py-2 text-sm bg-white mr-4">
            <option value="all">Semua Kategori</option>
            <option value="kopi">Goodday</option>
            <option value="mentega">Filma</option>
            <option value="susu">Frisian flag</option>
            <option value="snack">Oreo</option>
        </select>
        <div class="relative flex-grow">
            <input type="text" id="live-search" placeholder="Cari produk..." 
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-yellow-400 focus:outline-none">
            <ul id="search-results" 
                class="absolute left-0 top-full mt-1 w-full bg-white border border-gray-300 rounded shadow-md max-h-48 overflow-auto z-10 hidden">
            </ul>
        </div>
        <a href="/cart" class="text-gray-700 text-lg ml-4">
            <i class="fa fa-shopping-cart"></i>
        </a>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out
                </button>
            </form>
    </header>

    <section class="shop_section layout_padding">
      <div class="container mx-auto px-4 py-8">
        <div class="heading_container heading_center mb-8 text-center">
          <h2 class="text-3xl font-semibold">Produk</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
          <!-- Product 1 -->
          <div class="box bg-gray-200 p-4 relative">
            <a href="">
              <div class="img-box flex justify-center items-center py-6">
                <img src="images/filma.jpg" alt="" class="max-w-full max-h-36 object-contain">
              </div>
              <div class="detail-box flex justify-between">
                <h6 class="text-lg font-semibold">Filma</h6>
                <h6 class="text-sm">
                  Harga <span class="font-semibold">Rp.9.000</span>
                </h6>
              </div>
              <div class="new absolute top-2 left-2 bg-white w-12 h-12 flex justify-center items-center rounded-full text-sm text-black">
                <span>Baru</span>
              </div>
            </a>
          </div>
    
          <!-- Product 2 -->
          <div class="box bg-gray-200 p-4 relative">
            <a href="">
              <div class="img-box flex justify-center items-center py-6">
                <img src="images/oreo.jpg" alt="" class="max-w-full max-h-36 object-contain">
              </div>
              <div class="detail-box flex justify-between">
                <h6 class="text-lg font-semibold">Oreo</h6>
                <h6 class="text-sm">
                  Harga <span class="font-semibold">Rp.5.000</span>
                </h6>
              </div>
              <div class="new absolute top-2 left-2 bg-white w-12 h-12 flex justify-center items-center rounded-full text-sm text-black">
                <span>Baru</span>
              </div>
            </a>
          </div>
    
          <!-- Product 3 -->
          <div class="box bg-gray-200 p-4 relative">
            <a href="">
              <div class="img-box flex justify-center items-center py-6">
                <img src="images/indomiegoreng.jpg" alt="" class="max-w-full max-h-36 object-contain">
              </div>
              <div class="detail-box flex justify-between">
                <h6 class="text-lg font-semibold">Indomie Goreng</h6>
                <h6 class="text-sm">
                  Harga <span class="font-semibold">Rp.3.500</span>
                </h6>
              </div>
              <div class="new absolute top-2 left-2 bg-white w-12 h-12 flex justify-center items-center rounded-full text-sm text-black">
                <span>Baru</span>
              </div>
            </a>
          </div>
    
          <!-- Product 4 -->
          <div class="box bg-gray-200 p-4 relative">
            <a href="">
              <div class="img-box flex justify-center items-center py-6">
                <img src="images/frisianflag.jpg" alt="" class="max-w-full max-h-36 object-contain">
              </div>
              <div class="detail-box flex justify-between">
                <h6 class="text-lg font-semibold">Frisian Flag</h6>
                <h6 class="text-sm">
                  Harga <span class="font-semibold">Rp.11.000</span>
                </h6>
              </div>
              <div class="new absolute top-2 left-2 bg-white w-12 h-12 flex justify-center items-center rounded-full text-sm text-black">
                <span>Baru</span>
              </div>
            </a>
          </div>
    
          <!-- Product 5 -->
          <div class="box bg-gray-200 p-4 relative">
            <a href="">
              <div class="img-box flex justify-center items-center py-6">
                <img src="images/jolly.jpg" alt="" class="max-w-full max-h-36 object-contain">
              </div>
              <div class="detail-box flex justify-between">
                <h6 class="text-lg font-semibold">Jolly</h6>
                <h6 class="text-sm">
                  Harga <span class="font-semibold">Rp.16.500</span>
                </h6>
              </div>
              <div class="new absolute top-2 left-2 bg-white w-12 h-12 flex justify-center items-center rounded-full text-sm text-black">
                <span>Baru</span>
              </div>
            </a>
          </div>
    
          <!-- Product 6 -->
          <div class="box bg-gray-200 p-4 relative">
            <a href="">
              <div class="img-box flex justify-center items-center py-6">
                <img src="images/aoka.jpg" alt="" class="max-w-full max-h-36 object-contain">
              </div>
              <div class="detail-box flex justify-between">
                <h6 class="text-lg font-semibold">Roti Aoka</h6>
                <h6 class="text-sm">
                  Harga <span class="font-semibold">Rp.3.000</span>
                </h6>
              </div>
              <div class="new absolute top-2 left-2 bg-white w-12 h-12 flex justify-center items-center rounded-full text-sm text-black">
                <span>Baru</span>
              </div>
            </a>
          </div>
    
          <!-- Product 7 -->
          <div class="box bg-gray-200 p-4 relative">
            <a href="">
              <div class="img-box flex justify-center items-center py-6">
                <img src="images/abcsaos.jpg" alt="" class="max-w-full max-h-36 object-contain">
              </div>
              <div class="detail-box flex justify-between">
                <h6 class="text-lg font-semibold">Saos ABC</h6>
                <h6 class="text-sm">
                  Harga <span class="font-semibold">Rp.8.500</span>
                </h6>
              </div>
              <div class="new absolute top-2 left-2 bg-white w-12 h-12 flex justify-center items-center rounded-full text-sm text-black">
                <span>Baru</span>
              </div>
            </a>
          </div>
    
          <!-- Product 8 -->
          <div class="box bg-gray-200 p-4 relative">
            <a href="">
              <div class="img-box flex justify-center items-center py-6">
                <img src="images/goodday.jpg" alt="" class="max-w-full max-h-36 object-contain">
              </div>
              <div class="detail-box flex justify-between">
                <h6 class="text-lg font-semibold">Kopi Goodday</h6>
                <h6 class="text-sm">
                  Harga <span class="font-semibold">Rp.2.000</span>
                </h6>
              </div>
              <div class="new absolute top-2 left-2 bg-white w-12 h-12 flex justify-center items-center rounded-full text-sm text-black">
                <span>Baru</span>
              </div>
            </a>
          </div>
        </div>
        <div class="btn-box mt-8 text-center">
          <a href="" class="inline-block py-2 px-8 bg-blue-600 text-black rounded-lg hover:bg-transparent hover:text-blue-600 border-2 border-blue-600 transition">
            Lihat Semua Produk
          </a>
        </div>
      </div>
    </section>
    
    <script>
        // Simulasi data pencarian (contoh produk)
        const products = [
            "Filma",
            "Saos ABC",
            "Kopi Goodday",
        ];

        // Fungsi Live Search
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
                    li.className = "px-4 py-2 hover:bg-yellow-400 hover:text-white cursor-pointer";
                    li.onclick = () => alert(`Anda memilih: ${product}`);
                    results.appendChild(li);
                });
                results.classList.remove("hidden");
            } else {
                results.classList.add("hidden");
            }
        }

        document.getElementById("live-search").addEventListener("input", liveSearch);
    </script>
</body>
</html>
