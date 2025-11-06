<?php 
 
use Illuminate\Support\Facades\Route; 
use Illuminate\Http\Request; 
 
// Halaman Beranda 
Route::get('/', function () { 
    return view('beranda'); 
})->name('beranda'); 
 
// Halaman Login 
Route::get('/login', function () { 
    return view('login'); 
})->name('login'); 
 
// Proses Login 
Route::post('/login', function (Request $request) { 
    $username = $request->input('username'); 
    $password = $request->input('password'); 
 
    if ($username === 'admin' && $password === '12345') { 
        return redirect()->route('produk'); 
    } else { 
        return back()->with('error', 'Username atau Password salah!'); 
    } 
})->name('login.process'); 
 
// Halaman Produk Penjualan 
Route::get('/produk', function () { 
    $produk = [
        ['id' => 1, 'nama' => 'Laptop ASUS', 'harga' => 'Rp 8.500.000', 'foto' => 
'images/ASUS8jt.jpg', 'deskripsi' => 'Laptop ASUS dengan prosesor Intel i7 
dan RAM 16GB.'], 
        ['id' => 2, 'nama' => 'Smartphone Samsung', 'harga' => 'Rp 4.200.000', 'foto' => 
'images/A50.jpg', 'deskripsi' => 'Smartphone Samsung layar AMOLED 6.5 
inci dengan kamera 48MP.'], 
        ['id' => 3, 'nama' => 'Kamera Canon', 'harga' => 'Rp 6.750.000', 'foto' => 
'images/cannon6jt.jpg', 'deskripsi' => 'Kamera Canon DSLR dengan lensa kit 
18-55mm.'], 
         ['id' => 4, 'nama' => 'Apple Watch', 'harga' => 'Rp 5.500.000', 'foto' => 
'images/applewatch.jpg', 'deskripsi' => 'SmartWatch Yang Sangat Bagus Dengan Desain Minimalis.'], 
    ]; 
    return view('produk', compact('produk')); 
})->name('produk'); 
 
// Halaman Detail Pembelian 
Route::get('/produk/{id}', function ($id) { 
    $produk = [ 
        1 => ['nama' => 'Laptop ASUS', 'harga' => 'Rp 8.500.000', 'foto' => 
'images/ASUS8jt.jpg', 'deskripsi' => 'Laptop ASUS dengan prosesor Intel i7 
dan RAM 16GB.'],
        2 => ['nama' => 'Smartphone Samsung', 'harga' => 'Rp 4.200.000', 'foto' => 
'images/A50.jpg', 'deskripsi' => 'Smartphone Samsung layar AMOLED 6.5 
inci dengan kamera 48MP.'], 
        3 => ['nama' => 'Kamera Canon', 'harga' => 'Rp 6.750.000', 'foto' => 
'images/cannon6jt.jpg', 'deskripsi' => 'Kamera Canon DSLR dengan lensa kit 
18-55mm.'], 
        4 => ['nama' => 'Apple Watch', 'harga' => 'Rp 5.500.000', 'foto' => 
'images/applewatch.jpg', 'deskripsi' => 'SmartWatch Yang Sangat Bagus Dengan Desain Minimalis.'], 
    ]; 
 
    // Pastikan ID valid 
    if (!array_key_exists($id, $produk)) { 
        abort(404, 'Produk tidak ditemukan'); 
    } 
 
    $detail = $produk[$id]; 
    return view('detail', compact('detail')); 
})->name('produk.detail'); 
 
// Logout 
Route::get('/logout', function () { 
    return redirect()->route('beranda'); 
})->name('logout');
// (Pastikan Anda sudah 'use' Controller-nya di bagian atas file)
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');