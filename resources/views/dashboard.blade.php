<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroceriesMart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">GroceriesMart</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Kategori</a>
            <a href="shop.html">Belanja</a>
            <a href="contact.html">Kontak kami</a>
        </nav>
        <div class="user_option">
            <!-- Live Search -->
            <div class="search-container">
                <input type="text" id="live-search" placeholder="Cari produk..." onkeyup="liveSearch()">
                <ul id="search-results"></ul>
            </div>
            <!-- Keranjang -->
            <a href="{{url('/cart')}}" class="cart-icon">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="cart-count">0</span>
            </a>
              <!-- Log Out -->
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out
                </button>
            </form>
        </div>
    </header>

    <script>
        
        const products = ["Saos", "Goodday", "Frisainflag", "Indomie", "Filma", "Roti", "Oreo"];

        function liveSearch() {
            const input = document.getElementById("live-search").value.toLowerCase();
            const results = document.getElementById("search-results");
            results.innerHTML = "";

            if (input.length > 0) {
                const filtered = products.filter(product =>
                    product.toLowerCase().includes(input)
                );
                filtered.forEach(product => {
                    const li = document.createElement("li");
                    li.textContent = product;
                    results.appendChild(li);
                });
            }
        }
    </script>
</body>
<body>
    <div class="slider-container">
        <div class="slider-content">
            <h1>Selamat datang di GroceriesMart
            </h1>
            <p>Selamat datang di Groceries Mart, mitra terpercaya Anda untuk kebutuhan sehari-hari! Kami adalah toko kelontong yang berkomitmen untuk menyediakan produk berkualitas dengan harga terjangkau.</p>
            <button>Belanja sekarang</button>
        </div>
        <div class="slider-images">
            <img src="images/toko2.jpg">
        </div>
    </div>
</body>
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Produk
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/filma.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Filma
                </h6>
                <h6>
                  Harga
                  <span>
                    Rp.9.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/oreo.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Oreo
                </h6>
                <h6>
                  Harga
                  <span>
                    Rp.5.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/indomiegoreng.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Indomie Goreng
                </h6>
                <h6>
                  Harga
                  <span>
                    Rp.3,500
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/frisianflag.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Frisian Flag
                </h6>
                <h6>
                  Harga
                  <span>
                    Rp.11.000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/jolly.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Jolly
                </h6>
                <h6>
                  Harga
                  <span>
                    Rp.16.500
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/aoka.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Roti Aoka
                </h6>
                <h6>
                  Harga
                  <span>
                    Rp.3,000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/abcsaos.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Saos ABC
                </h6>
                <h6>
                  Harga
                  <span>
                    Rp.8,500
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/goodday.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Kopi Goodday
                </h6>
                <h6>
                  Harga
                  <span>
                    Rp.2,000
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Lihat Semua Produk
        </a>
      </div>
    </div>
  </section>
  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              TENTANG KAMI
            </h6>
            <p>
            Selamat datang di Groceries Mart, mitra terpercaya Anda untuk kebutuhan sehari-hari! Kami adalah toko kelontong yang berkomitmen untuk menyediakan produk berkualitas dengan harga terjangkau.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Masukan Email">
                <button>
                  Berlangganan
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              BUTUH BANTUAN
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              KONTAK KAMI
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Gegerkalomg </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>0223201223</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> groceriesmart@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="">GroceriesMart</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="{{asset('js/jquery-3.4.1min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</html>