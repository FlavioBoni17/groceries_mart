<section class="shop_section layout_padding">
  <div class="container mx-auto px-4 py-8">
    <div class="heading_container heading_center mb-8 text-center">
      <h2 class="text-3xl font-semibold">Produk</h2>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <!-- Product 1 -->

      @foreach ($product as $products)
        
      <div class="box bg-gray-200 p-8 relative">
        <a href="">
          <div class="img-box flex justify-center items-center py-12">
            <img src="products/{{ $products->image }}" alt="" class="max-w-full max-h-48 object-contain">
          </div>
          <div class="detail-box mt-4 flex justify-between items-center">
            <h6 class="text-lg font-semibold">{{ $products->title }}</h6>
            <h6 class="text-sm">
              Harga <span class="font-semibold">Rp.{{ $products->price }}</span>
            </h6>
          </div>
        
        </a>
      </div>
      @endforeach

    </div>
    <div class="btn-box mt-8 text-center">
      <a href="shop.php" class="inline-block py-2 px-8 bg-blue-600 text-black rounded-lg hover:bg-transparent hover:text-blue-600 border-2 border-blue-600 transition">
        Lihat Semua Produk
      </a>
    </div>
  </div>
</section>
