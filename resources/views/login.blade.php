<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | RafTech Store</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Sedikit style kustom untuk ikon brand */
        .brand-icon {
            font-size: 3.5rem;
            color: #0d6efd; /* Warna biru primer Bootstrap */
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            
            <div class="card shadow-lg border-0">
                <div class="card-body p-4 p-md-5">
                    
                    <div class="text-center mb-4">
                        <i class="bi bi-robot brand-icon"></i>
                        <h3 class="mt-2 mb-0">RafTech Store</h3>
                        <p class="text-muted">Silakan login untuk melanjutkan</p>
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                            </div>
                        </div>
                        
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>
                </div>
                
                <div class="card-footer text-center bg-white border-0 pt-0 pb-4">
                    <small class="text-muted">Gunakan: <b>admin</b> & <b>12345</b></small>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('beranda') }}" class="text-decoration-none">
                    <i class="bi bi-arrow-left"></i> Kembali ke Beranda
                </a>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>