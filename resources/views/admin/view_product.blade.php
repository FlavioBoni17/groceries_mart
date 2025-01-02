<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style type="text/css">

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px; 
        }

        .table_deg {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #4A90E2;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 12px;
            border: 1px solid #ddd;
        }

        td {
            text-align: center;
            padding: 12px;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        td img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
        }

        input[type='search'] {
            width: 350px;
            height: 40px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-left: 50px;
            margin-bottom: 20px;
            transition: 0.3s ease;
        }

        input[type='search']:focus {
            outline: none;
            border-color: #4A90E2;
        }

        button[type='submit'] {
            padding: 10px 20px;
            background-color: #4A90E2;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button[type='submit']:hover {
            background-color: #357ABD;
        }

        .table_deg tr:hover {
            background-color: #f4f4f4;
        }

        .action-btns a {
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin: 5px;
            transition: 0.3s ease;
        }

        .action-btns .edit {
            background-color: #28A745;
            color: white;
        }

        .action-btns .edit:hover {
            background-color: #218838;
        }

        .action-btns .delete {
            background-color: #DC3545;
            color: white;
        }

        .action-btns .delete:hover {
            background-color: #C82333;
        }

        .action-btns a:active {
            transform: scale(0.98);
        }

    </style>

</head>
<body class="bg-gray-50 font-sans">

    <div class="flex h-screen">

        {{-- Sidebar --}}
        <aside class="w-64 bg-blue-900 text-white flex flex-col fixed h-full">
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

        <main class="flex-grow ml-64 p-6 relative">

            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-blue-900">Lihat Produk</h1>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                   @csrf
                <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                </button>
              </form>
            </header>

            <form action="{{url('product_search')}}" method="get">
                @csrf
                <input type="search" name="search" placeholder="Cari produk...">
                <button type="submit">Search</button>
            </form>

            <div class="div_deg mt-6">
                <table class="table_deg">
                    <thead>
                        <tr>
                            <th>Judul Produk</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $products)
                        <tr>
                            <td>{{ $products->title }}</td>
                            <td>{!! Str::limit($products->description, 50) !!}</td>
                            <td>{{ $products->category }}</td>
                            <td>{{ $products->price }}</td>
                            <td>{{ $products->quantity }}</td>
                            <td><img src="products/{{ $products->image }}" alt="{{ $products->title }}"></td>
                            <td class="action-btns">
                                <a href="{{ url('update_product', $products->id) }}" class="edit">Edit</a>
                                <a href="{{ url('delete_product', $products->id) }}" class="delete" onclick="confirmation(event)">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

    </div>

    <script type="text/javascript">
        function confirmation(ev)
        {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            swal({
                title: "Apakah Kamu Yakin Menghapus Ini?",
                text: "Penghapusan ini akan bersifat permanen",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</body>
</html>
