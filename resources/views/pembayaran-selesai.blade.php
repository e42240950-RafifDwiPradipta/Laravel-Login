<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
            min-height: 100vh;
        }
        .card {
            border-radius: 1.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .btn-home {
            background-color: #0d6efd;
            color: white;
            transition: 0.3s;
        }
        .btn-home:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">

<div class="card text-center p-5" style="max-width: 500px;">
    <i class="bi bi-check-circle-fill text-success display-1 mb-3"></i>
    <h3 class="fw-bold">Pembayaran Berhasil!</h3>
    <p class="text-muted mt-2">Terima kasih telah berbelanja di <strong>Sistem Penjualan Elektronik</strong>.</p>

    <a href="{{ route('produk') }}" class="btn btn-home mt-3">
        <i class="bi bi-arrow-left me-2"></i> Kembali ke Produk
    </a>
</div>

</body>
</html>
