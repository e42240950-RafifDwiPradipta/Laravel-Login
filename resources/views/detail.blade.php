<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembelian</title>
    <!-- Memuat Bootstrap CSS -->
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
        .product-card-detail {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.75rem;
        }
        .product-price {
            font-size: 2.25rem;
            font-weight: 700;
            color: #343a40;
        }
        .quantity-input {
            max-width: 100px;
        }

        /* ===============================================================
          BARU: Style untuk navbar baru
          ===============================================================
        */
        .navbar {
            /* Memberi sedikit jarak di bawah navbar */
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
  - Menggunakan bg-white dan shadow-sm
  - Menambahkan link navigasi yang collapsib
  - Menambahkan ikon keranjang
  ===============================================================
-->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('produk') }}">Sistem Penjualan</a>
    
    <!-- Tombol Toggler untuk mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Link Navigasi -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
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

<!-- Konten Utama (Tidak berubah, tapi akan terlihat lebih baik) -->
<div class="container my-5">
    
    <div class="card product-card-detail p-4 p-md-5">
        <div class="row g-5 align-items-center">
            
            <!-- Kolom 1: Gambar Produk -->
            <div class="col-lg-5">
                <img src="{{ asset($detail['foto'] ?? 'img/default.jpg') }}" 
                     alt="{{ $detail['nama'] }}" 
                     class="product-image shadow-sm">
            </div>
            
            <!-- Kolom 2: Info Produk -->
            <div class="col-lg-7">
                
                <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill mb-2 fs-6">
                    Elektronik
                </span>

                <h2 class="display-5 fw-bold">{{ $detail['nama'] }}</h2>
                
                <div class="my-3">
                    <span class="product-price">
                        {{ $detail['harga'] }}
                    </span>
                </div>
                
                <p class="fs-5 text-muted mt-3">{{ $detail['deskripsi'] }}</p>

                <!-- Menambahkan pemilih jumlah barang -->
                <div class="row mt-4 align-items-center">
                    <div class="col-auto">
                        <label for="quantity" class="form-label fs-5">Jumlah:</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" class="form-control form-control-lg quantity-input" id="quantity" value="1" min="1">
                    </div>
                </div>

                <div class="mt-4 pt-4 border-top">
                    <button class="btn btn-primary btn-lg me-2">
                        <i class="bi bi-cart-plus-fill"></i> Konfirmasi Pembelian
                    </button>
                    <a href="{{ route('produk') }}" class="btn btn-outline-secondary btn-lg">
                        Kembali
                    </a>
                </div>
            </div>

        </div> <!-- Penutup untuk <div class="row"> -->
    </div> <!-- Penutup untuk <div class="card"> -->
</div> <!-- Penutup untuk <div class="container"> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>