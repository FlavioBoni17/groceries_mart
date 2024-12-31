<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <h1 class="text-2xl font-bold text-blue-900">Update Kategori</h1>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="px-4 py-2 rounded border border-gray-300">
                        <span class="absolute inset-y-0 right-2 flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4 4m0 0l4-4m-4 4h16m-6-9a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </div>
                    
                    <button class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-600">Search</button>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="absolute top-6 right-6">
                    @csrf
                    <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Logout</button>
                </form>
                
            </header>

            <div>

            </style>
            <form action="{{url('update_category',$data->id)}}" method="post">
                @csrf
                <input type="text" name="category" value="{{$data->category_name}}">
                <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700" value="Update Category">Update Kategori</button>
            </form>


        </div>
