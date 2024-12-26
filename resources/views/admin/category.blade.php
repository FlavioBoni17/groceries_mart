<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                        <a href="#" class="block px-4 py-2">Home</a>
                    </li>
                    <li class="hover:bg-blue-700">
                        <a href="{{ url('view_category') }}" class="block px-4 py-2">Kategori</a>
                    </li>
                    <li class="hover:bg-blue-700">
                        <a href="add-product.php" class="block px-4 py-2">Produk</a>
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
                <h1 class="text-2xl font-bold text-blue-900">Kategori</h1>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                    @csrf
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button>
                </form>
            </header>

                <h1>Tambah Kategori</h1>

            <div class="div_deg">

            <form action="{{ url('add_category') }}" method="post">

                @csrf
                <div>
                    <input type="text" name="category">
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </div>
            </form>

            </div>
        </main>


            

    </div>
</body>
</html>
