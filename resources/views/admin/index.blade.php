<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 font-sans">
    <div class="flex h-screen">
        
        {{-- Sidebar --}}
        <aside class="w-64 bg-blue-900 text-white flex flex-col">
            <div class="p-4 text-center text-2xl font-bold border-b border-blue-700">
               Admin Area
            </div>
            <nav class="flex-grow">
                <ul>
                    <li class="hover:bg-blue-700 flex items-center">
                        <i class="fa-solid fa-home mx-3"></i>
                        <a href="{{ url('admin/dashboard') }}" class="block px-4 py-2">Home</a>
                    </li>
                    <li class="hover:bg-blue-700 flex items-center">
                        <i class="fa-solid fa-list mx-3"></i>
                        <a href="{{ url('view_category') }}" class="block px-4 py-2">Kategori</a>
                    </li>
                    <li class="hover:bg-blue-700 flex items-center">
                        <i class="fa-solid fa-box mx-3"></i>
                        <a href="#" class="block px-4 py-2">Produk</a>
                    </li>
                    <li class="hover:bg-blue-700 flex items-center">
                        <i class="fa-solid fa-plus mx-3"></i>
                        <a href="{{ url('add_product') }}" class="block px-4 py-2">Tambah Produk</a>
                    </li>
                    <li class="hover:bg-blue-700 flex items-center">
                        <i class="fa-solid fa-eye mx-3"></i>
                        <a href="{{ url('view_product') }}" class="block px-4 py-2">Lihat Produk</a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <main class="flex-grow p-6 relative">
            
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-blue-900">Dashboard</h1>
                <div class="flex items-center space-x-4">
                    {{-- Profile Picture and Name --}}
                    <div class="flex items-center space-x-2">
                        <img src="https://via.placeholder.com/40" alt="Admin" class="rounded-full w-10 h-10">
                        <span class="text-blue-900 font-semibold">Admin</span>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                   @csrf
                   <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                   <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                   </button>
                </form>

            </header>

            <section class="grid grid-cols-4 gap-6 mb-6">
                <div class="bg-white p-6 rounded shadow text-center">
                    <h2 class="text-xl font-bold text-blue-900">Pengguna</h2>
                    <p class="text-3xl font-bold text-blue-700">1,245</p>
                </div>
                <div class="bg-white p-6 rounded shadow text-center">
                    <h2 class="text-xl font-bold text-blue-900">Produk</h2>
                    <p class="text-3xl font-bold text-blue-700">342</p>
                </div>
                <div class="bg-white p-6 rounded shadow text-center">
                    <h2 class="text-xl font-bold text-blue-900">Pesanan</h2>
                    <p class="text-3xl font-bold text-blue-700">528</p>
                </div>
                <div class="bg-white p-6 rounded shadow text-center">
                    <h2 class="text-xl font-bold text-blue-900">Pendapatan</h2>
                    <p class="text-3xl font-bold text-blue-700">Rp. 20,000,000</p>
                </div>
            </section>

            <section>
                <h2 class="text-xl font-bold text-blue-900 mb-4">Pesanan terbaru</h2>
                <div class="bg-white rounded shadow overflow-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-blue-200">
                                <th class="px-4 py-2 border">Order ID</th>
                                <th class="px-4 py-2 border">kostumer</th>
                                <th class="px-4 py-2 border">tanggal</th>
                                <th class="px-4 py-2 border">Jumlah</th>
                                <th class="px-4 py-2 border">Statu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">#1024</td>
                                <td class="px-4 py-2 border">Agus</td>
                                <td class="px-4 py-2 border">2024-12-25</td>
                                <td class="px-4 py-2 border">Rp. 100,000</td>
                                <td class="px-4 py-2 border text-green-600">komplit</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">#1025</td>
                                <td class="px-4 py-2 border">gani</td>
                                <td class="px-4 py-2 border">2024-12-26</td>
                                <td class="px-4 py-2 border">Rp. 200,000</td>
                                <td class="px-4 py-2 border text-yellow-600">menunggu</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">#1026</td>
                                <td class="px-4 py-2 border">Nanas</td>
                                <td class="px-4 py-2 border">2024-12-26</td>
                                <td class="px-4 py-2 border">Rp. 250,000</td>
                                <td class="px-4 py-2 border text-red-600">gagal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
