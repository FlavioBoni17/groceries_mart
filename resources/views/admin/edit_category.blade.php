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
            <div class="p-4 text-center text-2xl font-bold border-b border-blue-700">Admin Area</div>
            <nav class="flex-grow">
                <ul>
                    <li class="hover:bg-blue-700 flex items-center">
                        <i class="fa-solid fa-home mx-3"></i>
                        <a href="{{ url('admin/dashboard') }}" class="block px-4 py-2">Beranda</a>
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
                    <li class="hover:bg-blue-700 flex items-center">
                        <i class="fa-solid fa-table mx-3"></i>
                        <a href="{{ url('view_orders') }}" class="block px-4 py-2">Pesanan</a>
                    </li>
                </ul>
            </nav>
        </aside>

        
        <main class="flex-grow p-6 relative">
            
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-blue-900">Update Kategori</h1>
                <div class="flex items-center space-x-4">
                </div>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                   @csrf
                <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                </button>
              </form>

            </header>

            <div class="max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-md">
                <form action="{{url('update_category', $data->id)}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 font-medium mb-2">Nama Kategori</label>
                        <input type="text" id="category" name="category" value="{{$data->category_name}}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    </div>

                    <button type="submit" class="bg-blue-800 text-white px-6 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Update Kategori
                    </button>
                </form>
            </div>

        </main>
    </div>
</body>
</html>
