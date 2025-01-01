<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        label
        {
            display: inline-block;
            width: 200px;
            font-size: 18px !important ;
        }
    
        input[type='text']
        {
            width: 350px;
            height: 50px;
        }
        textarea
        {
            width: 450px;
            height: 80px;
        }

        .input_deg
        {
            padding: 15px;
        }
    </style>

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
                    <li class="hover:bg-blue-700">
                        <a href="{{ url('admin/dashboard') }}" class="block px-4 py-2">Home</a>
                    </li>
                    <li class="hover:bg-blue-700">
                        <a href="{{ url('view_category') }}" class="block px-4 py-2">Kategori</a>
                    </li>
                    <li class="hover:bg-blue-700">
                        <a href="#" class="block px-4 py-2">Produk</a>
                    </li>
                    <li class="hover:bg-blue-700">
                        <a href="{{ url('add_product') }}" class="block px-4 py-2">Tambah Produk</a>
                    </li>
                    <li class="hover:bg-blue-700">
                        <a href="#" class="block px-4 py-2">Pesanan</a>
                    </li>
                    <li class="hover:bg-blue-700">
                        <a href="#" class="block px-4 py-2">Settings</a>
                    </li>
                </ul>
            </nav>
        </aside>

        
        <main class="flex-grow p-6 relative">
            
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-blue-900">Tambah Produk</h1>
                <div class="flex items-center space-x-4">
                </div>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                    @csrf
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button>
                </form>
            </header>

            <div class="div_deg">

                <form action="{{ url('upload_product') }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="input_deg">
                        <label for="">Judul Produk</label>
                        <input type="text" name="title" required>
                    </div>

                    <div class="input_deg">
                        <label for="">Deskripsi</label>
                        <textarea name="description" required></textarea>
                    </div>

                    <div class="input_deg">
                        <label for="">Harga</label>
                        <input type="text" name="price">
                    </div>

                    <div class="input_deg">
                        <label for="">Qty</label>
                        <input type="number" name="qty">
                    </div>

                    <div class="input_deg">
                        <label>Produk Kategori</label>
                        <select name="category" required>
                            <option>Pilih Opsi</option>
                            @foreach($category as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input_deg">
                        <label for="">Foto Produk</label>
                        <input type="file" name="image">
                    </div>

                    <div class="input_deg">
                        <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700" value="Tambah Produk">Tambah Produk</button>
                    </div>

                </form>

            </div>

            
        </main>
    </div>
</body>
</html>
