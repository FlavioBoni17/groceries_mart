<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white flex flex-col">
            <div class="p-4 text-center text-2xl font-bold border-b border-blue-700">
               Admin Area
            </div>
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
        <main class="flex-grow p-6 relative">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-blue-900">Pesanan</h1>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                   @csrf
                   <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center">
                   <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
                   </button>
                </form>
            </header>

            <!-- Orders Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border rounded-lg shadow-md">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="px-6 py-3 border-b">Nama Pelanggan</th>
                            <th class="px-6 py-3 border-b">Alamat</th>
                            <th class="px-6 py-3 border-b">Telepon</th>
                            <th class="px-6 py-3 border-b">Judul Produk</th>
                            <th class="px-6 py-3 border-b">Harga</th>
                            <th class="px-6 py-3 border-b">Gambar</th>
                            <th class="px-6 py-3 border-b">Status</th>
                            <th class="px-6 py-3 border-b">Ubah Status</th>
                            <th class="px-6 py-3 border-b">Print PDF</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($data as $data)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4">{{ $data->name }}</td>
                            <td class="px-6 py-4">{{ $data->rec_address }}</td>
                            <td class="px-6 py-4">{{ $data->phone }}</td>
                            <td class="px-6 py-4">{{ $data->product->title }}</td>
                            <td class="px-6 py-4">{{ $data->product->price }}</td>
                            <td class="px-6 py-4">
                                <img src="products/{{ $data->product->image }}" alt="{{ $data->product->title }}" class="w-20 h-20 object-cover">
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-sm font-semibold rounded-lg 
                                    @if($data->status == 'sedang diproses') bg-red-100 text-red-600
                                    @elseif($data->status == 'dalam perjalanan') bg-blue-100 text-blue-600
                                    @else bg-green-100 text-green-600 @endif">
                                    {{ $data->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="{{ url('on_the_way', $data->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">D</a>
                                <a href="{{ url('delivered', $data->id) }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Terkirim</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('print_pdf', $data->id) }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Print PDF</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
