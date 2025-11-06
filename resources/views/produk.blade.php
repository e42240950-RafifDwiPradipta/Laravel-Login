<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* ======== Background ======== */
        body {
            background: linear-gradient(to bottom, #f0f4f9 0%, #ffffff 30%);
            min-height: 100vh;
        }

        /* ======== Kartu Produk ======== */
        .product-card {
            border: none;
            border-radius: 0.8rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
        }

        /* 🔧 Perbaikan gambar agar tidak terpotong dan responsif */
        .product-card img {
            border-radius: 0.8rem 0.8rem 0 0;
            width: 100%;
            height: 220px;
            object-fit: contain;
            background-color: #f8f9fa;
            padding: 10px;
        }

        .product-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-price {
            font-size: 1.3rem;
            font-weight: 600;
            color: #20c997;
            margin-bottom: 1rem;
        }

        .btn-buy {
            margin-top: auto;
            font-weight: 500;
        }

        /* ======== Navbar ======== */
        .navbar {
            margin-bottom: 1rem;
        }

        .nav-link {
            font-weight: 500;
        }

        .btn-cart {
            font-size: 1.1rem;
        }

        /* ======== Responsif untuk HP ======== */
        @media (max-width: 768px) {
            .product-card img {
                height: 180px;
                padding: 8px;
            }

            .card-price {
                font-size: 1.1rem;
            }

            .btn-buy {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">RafTech Store</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
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

<!-- ======== Konten Produk ======== -->
<div class="container my-5">
    <h2 class="text-center fw-bold mb-5">Daftar Produk Penjualan</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        @foreach($produk as $item)
            <div class="col">
                <div class="card product-card">
                    <img src="{{ asset($item['foto'] ?? 'img/default.jpg') }}" alt="{{ $item['nama'] }}">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-semibold">{{ $item['nama'] }}</h5>
                        <p class="card-price">
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

    @if(count($produk) === 0)
        <div class="text-center mt-5 pt-5">
            <p class="text-muted fs-5">Belum ada produk yang ditambahkan.</p>
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
