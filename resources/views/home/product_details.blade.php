<!DOCTYPE html>
<html>

<head>
  
  @include('home.css')

  <style type="text/css">
  .div_center
  {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
  }

  .detail-box
  {
    padding: 15px;
  }

</style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

  </div>

  {{-- product details start --}}

    <section class="shop_section layout_padding">
    <div class="container mx-auto px-4 py-8">
        <div class="heading_container heading_center mb-8 text-center">
        <h2 class="text-3xl font-semibold">Produk</h2>
        </div>
        <div class="row">
        <!-- Product 1 -->
            
        <div class="col-md-12">       
            <div class="box bg-gray-200 p-8 relative">
            <div class="div_center">
                <img width="400" src="/products/{{ $data->image }}" alt="" class="max-w-full max-h-48 object-contain">
            </div>
            <div class="detail-box mt-4 flex justify-between items-center">
                <h6 class="text-lg font-semibold">{{ $data->title }}</h6>
                <h6 class="text-sm">
                Harga <span class="font-semibold">Rp.{{ $data->price }}</span>
                </h6>
            </div>
            
            <div class="detail-box mt-4 flex justify-between items-center">
                <h6 class="text-lg font-semibold">Kategori : {{ $data->category }}</h6>
                <h6 class="text-sm">
                QTY Tersedia<span class="font-semibold"> {{ $data->quantity }}</span>
                </h6>
            </div>

            <div class="detail-box mt-4 flex justify-between items-center">
                <p> {{ $data->description }}</p>
            </div>

        </div>

        </div>


        </div>
        <div class="btn-box mt-8 text-center">
        <a href="shop.php" class="inline-block py-2 px-8 bg-blue-600 text-black rounded-lg hover:bg-transparent hover:text-blue-600 border-2 border-blue-600 transition">
            Lihat Semua Produk
        </a>
        </div>
    </div>
    </section>


  {{-- product details end --}}

  <!-- info section -->
  @include('home.footer')
</body>

</html>