<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 
      ===============================================================
      BARU: Memuat Bootstrap Icons (untuk ikon keranjang & nav) 
      ===============================================================
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* ===============================================================
          BARU: Mengganti background body dengan gradient yang halus
          ===============================================================
        */
        body {
            /* Gradient dari biru-abu sangat muda ke putih */
            background: linear-gradient(to bottom, #f0f4f9 0%, #ffffff 30%);
            min-height: 100vh;
        }

        /* Style kartu produk dari file Anda sebelumnya (sudah bagus) */
        .product-card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%; 
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            border-radius: 0.5rem 0.5rem 0 0;
            aspect-ratio: 4/3;
            object-fit: cover;
        }
        .product-card .card-body {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-price {
            font-size: 1.3rem;
            font-weight: 600;
            color: #20c997;
            margin-bottom: 1rem;
        }
        .btn-buy {
            margin-top: auto;
        }

        /* ===============================================================
          BARU: Style untuk navbar baru
          ===============================================================
        */
        .navbar {
            margin-bottom: 1rem;
        }
        .nav-link {
            font-weight: 500;
        }
        .btn-cart {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

<!-- 
  ===============================================================
  NAVBAR BARU:
  Ini adalah navbar putih yang sama dari halaman detail
  ===============================================================
-->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">Sistem Penjualan</a>
    
    <!-- Tombol Toggler untuk mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Link Navigasi -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('beranda') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('produk') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kategori</a>
        </li>
      </ul>
      
      <!-- Ikon di Kanan -->
      <div class="d-flex align-items-center">
        <a href="#" class="btn btn-outline-dark btn-cart me-3">
            <i class="bi bi-cart-fill me-1"></i>
            Keranjang
            <span class="badge bg-primary rounded-pill ms-1">0</span>
        </a>
        <a href="{{ route('logout') }}" class="btn btn-outline-danger">
            <i class="bi bi-box-arrow-right me-1"></i>
            Logout
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Konten (Ini adalah layout kartu produk Anda yang sudah bagus) -->
<div class="container my-5">
    <h2 class="text-center fw-bold mb-5">Daftar Produk Penjualan</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($produk as $item)
            <div class="col">
                <div class="card product-card">
                    
                    <img src="{{ asset($item['foto'] ?? 'img/default.jpg') }}" class="card-img-top" alt="{{ $item['nama'] }}">

                    <div class="card-body text-center">
                        <h5 class="card-title fw-semibold">{{ $item['nama'] }}</h5>
                        
                        <p class="card-price">
                            {{-- 
                              Cek jika harga sudah diformat (string) atau belum (angka)
                              Ini agar aman untuk kedua kasus.
                            --}}
                            @if(is_numeric($item['harga']))
                                Rp {{ number_format($item['harga'], 0, ',', '.') }}
                            @else
                                {{ $item['harga'] }}
                            @endif
                        </p>
                        
                        <a href="{{ route('produk.detail', $item['id']) }}" class="btn btn-primary w-100 btn-buy">
                            Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Menampilkan pesan jika tidak ada produk --}}
    @if(count($produk) === 0)
        <div class="text-center mt-5 pt-5">
            <p class="text-muted fs-5">Belum ada produk yang ditambahkan.</p>
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>