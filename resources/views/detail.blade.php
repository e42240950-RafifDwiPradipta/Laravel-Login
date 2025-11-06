<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
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
            object-fit: contain;
            border-radius: 0.75rem;
            background-color: #f8f9fa;
            padding: 10px;
        }
        .product-price {
            font-size: 2rem;
            font-weight: 700;
            color: #198754;
        }
        .quantity-input {
            max-width: 120px;
        }
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

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('produk') }}">RafTech Store</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{ route('produk') }}">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Kategori</a></li>
      </ul>

      <div class="d-flex align-items-center">
        <a href="#" class="btn btn-outline-dark btn-cart me-3">
          <i class="bi bi-cart-fill me-1"></i> Keranjang
          <span class="badge bg-primary rounded-pill ms-1">0</span>
        </a>
        <a href="{{ route('logout') }}" class="btn btn-outline-danger">
          <i class="bi bi-box-arrow-right me-1"></i> Logout
        </a>
      </div>
    </div>
  </div>
</nav>

<div class="container my-5">
  <div class="card product-card-detail p-4 p-md-5">
    <div class="row g-5 align-items-center">
      
      <!-- Gambar Produk -->
      <div class="col-lg-5">
        <img src="{{ asset($detail['foto'] ?? 'img/default.jpg') }}" 
             alt="{{ $detail['nama'] }}" 
             class="product-image shadow-sm">
      </div>
      
      <!-- Info Produk -->
      <div class="col-lg-7">
        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill mb-2 fs-6">Elektronik</span>

        <h2 class="display-6 fw-bold">{{ $detail['nama'] }}</h2>

        <div class="my-3">
          <span class="product-price">{{ $detail['harga'] }}</span>
        </div>

        <p class="fs-5 text-muted">{{ $detail['deskripsi'] }}</p>

        <!-- 🔽 Form Pembelian -->
        <form action="{{ route('pembayaran') }}" method="POST" class="mt-4 pt-3 border-top">
          @csrf
          <input type="hidden" name="nama" value="{{ $detail['nama'] }}">
          <input type="hidden" name="harga" value="{{ $detail['harga'] }}">

          <div class="row align-items-center mb-3">
            <div class="col-auto">
              <label for="jumlah" class="form-label fs-5">Jumlah:</label>
            </div>
            <div class="col-auto">
              <input type="number" name="jumlah" id="jumlah" class="form-control form-control-lg quantity-input" value="1" min="1" required>
            </div>
          </div>

          <button type="submit" class="btn btn-primary btn-lg me-2">
            <i class="bi bi-cart-check me-1"></i> Konfirmasi Pembelian
          </button>
          <a href="{{ route('produk') }}" class="btn btn-outline-secondary btn-lg">Kembali</a>
        </form>

      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
