<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | RafTech Store</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .feature-icon {
            font-size: 3rem;
            color: #0d6efd; 
        }
        .hero-img {
            max-width: 100%;
            height: auto;
            border-radius: .3rem; 
        }

        /* --- INI KODE BARU UNTUK EFEK HOVER --- */
        
        .feature-box {
            /* 1. Membuat kotak jadi putih dengan border */
            padding: 2rem;
            background-color: #ffffff;
            border-radius: .5rem; /* Sudut melengkung */
            border: 1px solid #e9ecef; /* Border abu-abu tipis */
            height: 100%; /* Memastikan semua kotak sama tinggi */
            
            /* 2. Ini kuncinya: transisi (perubahan) yang mulus */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-box:hover {
            /* 3. Mengangkat kartu ke atas 8px */
            transform: translateY(-8px);
            
            /* 4. Menambahkan bayangan (shadow) agar terlihat "mengambang" */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
        }
        /* --- Akhir Kode Baru --- */
    </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">
            <i class="bi bi-robot"></i> RafTech Store
        </a>
    </div>
</nav>

<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1 text-dark">Temukan Gadget Impian Anda di RafTech Store</h1>
            <p class="lead">Smartphone, laptop, kamera, dan ribuan aksesoris elektronik terbaru.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Login & Cek Produk</a>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden text-center">
             <img class="hero-img" src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="MacBook Pro" width="400">
        </div>
    </div>
</div>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-dark">Mengapa Berbelanja di RafTech Store?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        
        <div class="col">
            <div class="feature-box text-center">
                <i class="bi bi-patch-check-fill feature-icon mb-3"></i>
                <h3 class="fs-2">100% Original</h3>
                <p>Kami menjamin semua produk yang Anda beli adalah barang asli dan bukan replika.</p>
            </div>
        </div>

        <div class="col">
            <div class="feature-box text-center">
                <i class="bi bi-shield-lock-fill feature-icon mb-3"></i>
                <h3 class="fs-2">Garansi Resmi</h3>
                <p>Nikmati ketenangan dengan garansi resmi untuk setiap pembelian produk elektronik.</p>
            </div>
        </div>
        
        <div class="col">
            <div class="feature-box text-center">
                <i class="bi bi-rocket-takeoff-fill feature-icon mb-3"></i>
                <h3 class="fs-2">Pengiriman Cepat</h3>
                <p>Proses pesanan yang cepat dan didukung oleh logistik terpercaya.</p>
            </div>
        </div>

    </div>
</div>

<footer class="footer mt-auto py-3 bg-dark">
    <div class="container text-center">
        <span class="text-white">© 2025 RafTech Store. Hak Cipta Dilindungi.</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>