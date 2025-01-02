<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style type="text/css">
    .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    label {
        display: inline-block;
        width: 200px;
        padding: 20px;
    }

    input[type="text"], input[type="number"] {
        width: 300px;
        height: 60px;
    }

    textarea {
        width: 450px;
        height: 100px;
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
                <h1 class="text-2xl font-bold text-blue-900">Update Produk</h1>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                    @csrf
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button>
                </form>
            </header>

            <div class="div_deg">
                <form action="{{ url('edit_product', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $data->title }}">
                    </div>

                    <div>
                        <label>Deskripsi</label>
                        <textarea name="description">{{ $data->description }}</textarea>
                    </div>

                    <div>
                        <label>Harga</label>
                        <input type="text" name="price" value="{{ $data->price }}">
                    </div>

                    <div>
                        <label>qty</label>
                        <input type="number" name="quantity" value="{{ $data->quantity }}">
                    </div>

                    <div>
                        <label>Kategori</label>
                        <select name="category">
                            <option value="{{ $data->category }}">{{ $data->category }}</option>
                            @foreach($category as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label>Foto Saat Ini</label>
                        <img width="150" src="/products/{{ $data->image }}">
                    </div>

                    <div>
                        <label>Foto Baru</label>
                        <input type="file" name="image">
                    </div>

                    <div>
                        <button type="submit" class="bg-green-800 text-white px-4 py-2 rounded hover:bg-green-700" value="Update Produk">Update Produk</button>
                    </div>

                </form>
            </div>
        </main>
    </div>
</body>
</html>
