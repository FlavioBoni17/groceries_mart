<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body class="bg-gray-50 font-sans">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white flex flex-col fixed h-full">
            <div class="p-6 text-center text-2xl font-bold border-b border-blue-700">Admin Area</div>
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

        <!-- Main Content -->
        <main class="flex-grow ml-64 p-8 relative">

            <!-- Header -->
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-blue-900">Lihat Produk</h1>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                   @csrf
                   <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                       <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                   </button>
                </form>
            </header>

            <!-- Search Bar -->
            <form action="{{url('product_search')}}" method="get" class="mb-6 flex items-center">
                @csrf
                <input type="search" name="search" placeholder="Cari produk..." class="w-1/3 px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="ml-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
                    <i class="fa-solid fa-search mr-2"></i> Search
                </button>
            </form>

            <!-- Product Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse bg-white shadow-md rounded-lg">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="px-6 py-3 text-left">Judul Produk</th>
                            <th class="px-6 py-3 text-left">Deskripsi</th>
                            <th class="px-6 py-3 text-left">Kategori</th>
                            <th class="px-6 py-3 text-left">Harga</th>
                            <th class="px-6 py-3 text-left">Qty</th>
                            <th class="px-6 py-3 text-center">Gambar</th>
                            <th class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $products)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-6 py-4">{{ $products->title }}</td>
                            <td class="px-6 py-4">{!! Str::limit($products->description, 50) !!}</td>
                            <td class="px-6 py-4">{{ $products->category }}</td>
                            <td class="px-6 py-4">{{ $products->price }}</td>
                            <td class="px-6 py-4">{{ $products->quantity }}</td>
                            <td class="px-6 py-4 text-center">
                                <img src="products/{{ $products->image }}" alt="{{ $products->title }}" class="w-20 h-20 rounded">
                            </td>
                            <td class="px-6 py-4 text-center flex justify-center space-x-2">
                                <a href="{{ url('update_product', $products->id) }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-400">Edit</a>
                                <a href="{{ url('delete_product', $products->id) }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400" onclick="confirmation(event)">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </main>

    </div>

    <!-- Confirmation Script -->
    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            swal({
                title: "Apakah Kamu Yakin Menghapus Ini?",
                text: "Penghapusan ini akan bersifat permanen",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

</body>
</html>
