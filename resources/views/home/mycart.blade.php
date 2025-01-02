<!DOCTYPE html>
<html>

<head>
  
  @include('home.css')

  <style type="text/css">
  .div_deg
  {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 60px;
  }

  table
  {
    border: 2px solid black;
    text-align: center;
    width: 800px;
  }

  th 
  {
    border: 2px solid black;
    text-align: center;
    color: white;
    font-size: 20px;
    font-weight: bold;
    background-color: black ;
  }

  td
  {
    border: 1px solid skyblue;
  }

  .cart_value
  {
    text-align: center;
    margin-bottom: 70px;
    padding: 18px;
  }
  </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

  </div>

<div class="div_deg">
    <table>
        <tr>
            <th>Judul Produk</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Hapus</th>
        </tr>

        @php
            $value = 0;    
        @endphp
        @foreach ($cart as $cart)
            
        <tr>
            <td>{{ $cart->product->title }}</td>
            <td>{{ $cart->product->price }}</td>
            <td>
                <img width="150" src="/products/{{ $cart->product->image }}" alt="">
            </td>
            <td>
                <a class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700" href="{{url('delete_cart', $cart->id) }}">Hapus</a>
            </td>
        </tr>

        @php
            $value = $value + $cart->product->price;
        @endphp
        @endforeach
    </table>
</div>

<div class="cart_value">
    <h3>Jumlah Total Keranjang : Rp.{{ $value }}</h3>
</div>


  <!-- info section -->
  @include('home.footer')
</body>

</html>