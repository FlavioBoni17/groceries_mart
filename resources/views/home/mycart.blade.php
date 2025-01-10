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
        font: 20px;
        font-weight: bold;
        background-color: black;
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

    .order_deg
    {
        padding-right: 100px;
        margin-top: -50px;
    }
    label
    {
        display: inline-block;
        width: 150px;
    }
    .div_gap
    {
        padding: 20px;
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

    <div class="order_deg">

        <form action="{{ url('confirm_order') }}" method="post">
            @csrf
            <div class="div_gap">
                <label>Nama Penerima</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="dic_gap">
                <label>Alamat Penerima</label>
                <textarea name="address"> {{ Auth::user()->address }}</textarea>
            </div>
            <div class="div_gap">
                <label>Penerima Telepon</label>
                <input type="text" name="phone" value="{{ Auth::user()->phone }}"></input>
            </div>

            <div class="div_gap">
                <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700" value="Tempat Pemesanan">Tempat Pesanan</button>
            </div>
        </form>

    </div>

    <table>
        <tr>
            <th>Judul Produk</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Hapus</th>
        </tr>
        @php
            $value=0; 
        @endphp
        @foreach($cart as $cart)
        <tr>
            <td>{{ $cart->product->title }}</td>
            <td>{{ $cart->product->price }}</td>
            <td>
                <img width="150" src="/products/{{ $cart->product->image }}">
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
    <h3>Total Jumlah Keranjang : Rp.{{ $value }}</h3>
  </div>

  <!-- info section -->
  @include('home.footer')
</body>

</html>