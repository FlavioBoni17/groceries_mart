<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kategori</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style type="text/css">
        
        input[type="text"] {
            width: 100%;
            max-width: 400px;
            height: 40px;
        }
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        
        .table_deg {
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            border-collapse: collapse;
        }
        th {
            background-color: #1D4ED8;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: white;
        }
        td {
            padding: 12px;
            border: 1px solid #E2E8F0;
        }
        tr:hover {
            background-color: #F3F4F6;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">

    <div class="flex h-screen">
        
    {{-- Sidebar --}}
        <aside class="w-64 h-screen bg-blue-900 text-white flex flex-col">
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
        
        <main class="flex-grow p-6">
            
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-blue-900">Halaman Kategori</h1>
              <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                @csrf
                <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                </button>
              </form>

            </header>

            <div class="div_deg">
                <form action="{{ url('add_category') }}" method="post" class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="category" placeholder="Masukkan Kategori" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Tambah Kategori
                    </button>
                </form>
            </div>

            <div>
                <table class="table_deg">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->category_name}}</td>
                            <td>
                                <a class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" href="{{url('edit_category', $data->id) }}">Edit</a>
                            </td>
                            <td>
                                <a class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" onclick="confirmation(event)" href="{{url('delete_category', $data->id)}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </main>
    </div>

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
            })
            .then((willCancel) => {
                if(willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
