<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style type="text/css">
    table
    {
        border: 2px solid skyblue;
        text-align: center;
    }
    th
    {
        background-color: skyblue;
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
    }
    .table_center
    {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    td
    {
        color: black;
        padding: 10px;
        border: 1px solid skyblue;
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
                    <li class="hover:bg-blue-700 flex items-center">
                        <i class="fa-solid fa-table mx-3"></i>
                        <a href="{{ url('view_orders') }}" class="block px-4 py-2">Pesanan</a>
                    </li>
                </ul>
            </nav>
        </aside>
        
        <main class="flex-grow p-6 relative">
            
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-blue-900">Pesanan</h1>
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

            <div class="table_center">
            <table>
                <tr>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Judul Produk</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Ubah Status</th>
                </tr>

                @foreach ($data as $data)

                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->rec_address }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->product->title }}</td>
                    <td>{{ $data->product->price }}</td>
                    <td>
                        <img width="150" src="products/{{ $data->product->image }}">
                    </td>
                    <td>

                        @if($data->status == 'sedang diproses')
                        <span style="color:red">{{ $data->status }}</span>

                        @elseif($data->status == 'dalam perjalanan')
                        <span style="color: blue">{{ $data->status }}</span>

                        @else
                        <span style="color:green">{{ $data->status }}</span>

                        @endif

                    </td>
                    <td>
                        <a class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" href="{{ url('on_the_way', $data->id) }}">Dalam Perjalanan</a>
                        <a class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" href="{{ url('delivered', $data->id) }}">Terkirim</a>
                    </td>
                </tr>

                @endforeach
            </table>
            </div>

        </main>
    </div>
</body>
</html>
