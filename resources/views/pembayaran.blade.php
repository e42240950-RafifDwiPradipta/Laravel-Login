<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #f8f9fa, #ffffff);
            min-height: 100vh;
        }
        .card {
            border-radius: 1.25rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .btn-pay {
            background-color: #0d6efd;
            color: white;
            transition: 0.3s;
        }
        .btn-pay:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="card mx-auto p-4" style="max-width: 600px;">
        <h3 class="text-center fw-bold mb-4">💳 Pembayaran</h3>

        <div class="mb-3">
            <p><strong>Produk:</strong> {{ $produk['nama'] }}</p>
            <p><strong>Harga Satuan:</strong> Rp {{ number_format($produk['harga'], 0, ',', '.') }}</p>
            <p><strong>Jumlah:</strong> {{ $produk['jumlah'] }}</p>
        </div>

        <hr>
        <h5 class="fw-bold text-success">Total: Rp {{ number_format($produk['total'], 0, ',', '.') }}</h5>
        <hr>

        <form action="{{ route('pembayaran.selesai') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-semibold">Metode Pembayaran:</label>
                <select name="metode" class="form-select" required>
                    <option value="">Pilih Metode</option>
                    <option>Transfer Bank (BCA / BRI / Mandiri)</option>
                    <option>GoPay</option>
                    <option>OVO</option>
                    <option>Dana</option>
                    <option>QRIS</option>
                </select>
            </div>

            <button type="submit" class="btn btn-pay w-100 mt-3">
                <i class="bi bi-credit-card me-2"></i> Selesaikan Pembayaran
            </button>
        </form>
    </div>
</div>

</body>
</html>
