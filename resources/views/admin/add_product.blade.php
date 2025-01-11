<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        label {
            display: inline-block;
            width: 200px;
            font-size: 18px !important;
        }

        input[type='text'], input[type='number'] {
            width: 350px;
            height: 50px;
        }

        textarea {
            width: 450px;
            height: 80px;
        }

        .input_deg {
            padding: 15px;
        }
    </style>
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
                <h1 class="text-2xl font-bold text-blue-900">Tambah Produk</h1>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                   @csrf
                   <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                   <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                   </button>
                </form>

            </header>

            <div class="flex justify-center items-start pt-10 bg-gray-100 min-h-screen">
                 <form action="{{ url('upload_product') }}" method="Post" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
                   @csrf
                 <h2 class="text-2xl font-bold text-blue-800 mb-6 text-center">Tambah Produk</h2>
        
              <!-- Judul Produk -->
                 <div class="mb-4">
                   <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Produk</label>
                   <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                 </div>

              <!-- Deskripsi -->
                  <div class="mb-4">
                     <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                     <textarea name="description" id="description" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                  </div>

              <!-- Harga -->
                  <div class="mb-4">
                      <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga</label>
                      <input type="text" name="price" id="price" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                   </div>
  
              <!-- Qty -->
                  <div class="mb-4">
                      <label for="qty" class="block text-sm font-medium text-gray-700 mb-2">Qty</label>
                      <input type="number" name="qty" id="qty" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                  </div>

             <!-- Produk Kategori -->
                 <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Produk Kategori</label>
                     <select name="category" id="category" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                     <option disabled selected>Pilih Opsi</option>
                     @foreach($category as $category)
                     <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                     @endforeach
                   </select>
                </div>

               <!-- Foto Produk -->
                 <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Foto Produk</label>
                    <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                  </div>

               <!-- Submit Button -->
                  <div>
                    <button type="submit" class="w-full bg-blue-800 text-white py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                         Tambah Produk
                    </button>
                  </div>
              </form>
            </div>
        </main>
    </div>
</body>
</html>