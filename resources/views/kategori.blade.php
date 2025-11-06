<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">📂 Daftar Kategori Produk</h2>

        <div class="row justify-content-center">
            @foreach ($kategori as $k)
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm text-center p-3">
                        <h5 class="fw-bold">{{ $k['nama'] }}</h5>
                        <p class="text-muted">{{ $k['deskripsi'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('produk') }}" class="btn btn-outline-primary px-4">← Kembali ke Produk</a>
        </div>
    </div>
</body>
</html>
