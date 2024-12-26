<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceriesMart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-blue-700 text-white flex justify-between items-center px-6 py-4">
        <div class="text-xl font-bold">GroceriesMart</div>
        <nav class="flex space-x-6">
            <a href="index.php" class="hover:text-yellow-400">Home</a>
            <a href="#" class="hover:text-yellow-400">Kategori</a>
            <a href="shop.php" class="hover:text-yellow-400">Belanja</a>
            <a href="contact.php" class="hover:text-yellow-400">Kontak kami</a>
        </nav>
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out
                </button>
         </form>
    </header>



  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section py-12 relative">
    <div class="container mx-auto">
      <div class="heading_container mb-8 text-center">
        <h2 class="text-3xl font-semibold">Hubungi Kami</h2>
      </div>
      <div class="bg-white shadow-lg rounded-lg">
        <div class="flex flex-wrap">
          <!-- Map Section -->
          <div class="w-full lg:w-7/12">
            <div class="map_container h-full">
              <iframe src="https://www.google.com/maps/embed" 
                class="w-full h-full rounded-t-lg lg:rounded-l-lg lg:rounded-t-none" 
                frameborder="0" style="border:0;" allowfullscreen></iframe>
            </div>
          </div>
          <!-- Form Section -->
          <div class="w-full lg:w-5/12 p-6">
            <form action="#" class="space-y-4">
              <div>
                <input type="text" placeholder="Nama" 
                  class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
              </div>
              <div>
                <input type="email" placeholder="Email" 
                  class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
              </div>
              <div>
                <input type="text" placeholder="Telepon" 
                  class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500">
              </div>
              <div>
                <textarea placeholder="Pesan" 
                  class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500 h-32"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" 
                  class="px-6 py-3 bg-pink-500 text-white font-semibold rounded-md hover:bg-pink-600 transition duration-300">
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2-top bg-gray-800 text-white py-16 px-4">
    <div class="social_container flex justify-center mt-6 mb-8">
        <div class="social_box flex items-center justify-center space-x-4">
            <a href="#" class="text-white text-xl">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="#" class="text-white text-xl">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="#" class="text-white text-xl">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="#" class="text-white text-xl">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <div class="info_container">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 lg:w-1/4 mb-8">
                    <h6 class="font-semibold text-lg uppercase mb-6">TENTANG KAMI</h6>
                    <p class="text-gray-400">
                        Selamat datang di Groceries Mart, mitra terpercaya Anda untuk kebutuhan sehari-hari! Kami adalah toko kelontong yang berkomitmen untuk menyediakan produk berkualitas dengan harga terjangkau.
                    </p>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 mb-8">
    <h5 class="font-semibold text-lg mb-4">Newsletter</h5>
    <form action="#" class="space-y-4">
        <input type="email" placeholder="Masukan Email" class="w-full sm:w-3/4 md:w-2/3 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-400">
        <button type="submit" class="w-full sm:w-3/4 md:w-2/3 py-3 bg-pink-400 text-white font-semibold uppercase rounded-md hover:bg-pink-500 transition duration-300">Berlangganan</button>
    </form>
</div>
                <div class="w-full md:w-1/2 lg:w-1/4 mb-8">
                    <h6 class="font-semibold text-lg uppercase mb-6">BUTUH BANTUAN</h6>
                    <p class="text-gray-400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                    </p>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 mb-8">
                    <h6 class="font-semibold text-lg uppercase mb-6">KONTAK KAMI</h6>
                    <div class="info_link-box space-y-4">
                        <a href="#" class="flex items-center text-gray-400 hover:text-white">
                            <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                            <span> Gegerkalomg </span>
                        </a>
                        <a href="#" class="flex items-center text-gray-400 hover:text-white">
                            <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                            <span>0223201223</span>
                        </a>
                        <a href="#" class="flex items-center text-gray-400 hover:text-white">
                            <i class="fa fa-envelope mr-2" aria-hidden="true"></i>
                            <span> groceriesmart@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <footer class="footer_section mt-12 py-4 bg-gray-900 text-white">
        <div class="container mx-auto text-center">
            <p class="text-sm">
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="#" class="text-pink-400 hover:text-pink-500">GroceriesMart</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->
</section>

<!-- Scripts -->
<script src="{{asset('js/jquery-3.4.1min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('js/custom.js')}}"></script>


</body>

</html>