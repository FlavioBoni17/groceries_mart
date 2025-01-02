<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/css">

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px; 
    }

    .table_deg
    {
        border: 2px solid blue;
    }
    
    th
    {
        background-color: skyblue;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
    }

    td
    {
        border: 1px solid skyblue;
        text-align: center;
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
                        <a href="{{ url('view_product') }}" class="block px-4 py-2">Lihat Produk</a>
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
                <h1 class="text-2xl font-bold text-blue-900">Lihat Produk</h1>
                <div class="flex items-center space-x-4">
                </div>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                    @csrf
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button>
                </form>
            </header>

        
            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Judul Produk</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>qty</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>

                    @foreach($product as $products)

                    <tr>
                        <td>{{ $products->title }}</td>
                        <td>{!!Str::limit($products->description, 50) !!}</td>
                        <td>{{ $products->category }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->quantity }}</td>
                        <td>
                            <img height="120" width="120" src="products/{{ $products->image }}">
                        </td>
                        <td>
                            <a class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" href="{{ url('update_product', $products->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" onclick="confirmation(event)"  href="{{ url('delete_product', $products->id) }}">Hapus</a>
                        </td>
                    </tr>

                    @endforeach

                </table>
                
            </div>


        </main>
    </div>

     <script type="text/javascript">
        function confirmation(ev)
        {
            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({

                title: "Apakah Kamu Yakin Menghapus Ini?",
                text: "Penghapusan ini akan bersifat permanen",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })

            .then((willCancel)=>{

                if(willCancel)
            {
                window.location.href=urlToRedirect;
            }

            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
