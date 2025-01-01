<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kategori</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/css">
        input[type="text"]
        {
            width: 400px;
            height: 50px;
        }
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        .table_deg
        {
            text-align: center;
            margin: auto;
            border: 2px solid blue;
            margin-top: 50px;
            width: 600px;
        }
        th
        {
            background-color: skyblue;
            padding: 15px;
            font-size:20px;
            font-weight: bold;
            color: white;
        }
        td
        {
            padding: 10px;
            border: 1px solid skyblue;
        }

    </style>
</head>
<body class="bg-blue-50 font-sans">
    <div class="flex h-screen">
        
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
                <h1 class="text-2xl font-bold text-blue-900">Halaman Kategori</h1>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                    @csrf
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button>
                </form>
            </header>

            <div class="div_deg">

            <form action="{{ url('add_category') }}" method="post">

                @csrf
                <div>
                    <input type="text" name="category" placeholder="Masukkan Kategori">
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700" value="Add Category">Tambah Kategori</button>
                </div>
            </form>

            </div>

            <div>
                <table class="table_deg">
                    <tr>
                        <th>Nama Kategori</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>

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
