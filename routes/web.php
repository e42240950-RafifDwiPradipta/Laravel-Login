<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ====================
// 🏠 Halaman Beranda
// ====================
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// ====================
// 🔐 Login
// ====================
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'admin' && $password === '12345') {
        return redirect()->route('produk');
    } else {
        return back()->with('error', 'Username atau Password salah!');
    }
})->name('login.process');

// ====================
// 🛍️ Daftar Produk
// ====================
Route::get('/produk', function () {
    $produk = [
        ['id' => 1, 'nama' => 'Laptop ASUS VivoBook FLIP T740', 'harga' => 'Rp 8.500.000', 'foto' => 'images/asusvivobook.png', 'kategori' => 'Laptop'],
        ['id' => 2, 'nama' => 'Samsung A50', 'harga' => 'Rp 4.200.000', 'foto' => 'images/A50.jpg', 'kategori' => 'Smartphone',],
        ['id' => 3, 'nama' => 'Camera Canon EOS 1200D', 'harga' => 'Rp 6.750.000', 'foto' => 'images/canoneos1200d.jpg', 'kategori' => 'Kamera'],
        ['id' => 4, 'nama' => 'Apple Watch Series 5', 'harga' => 'Rp 5.500.000', 'foto' => 'images/applewatch.jpg', 'kategori' => 'Smartwatch'],
        ['id' => 5, 'nama' => 'iPhone 17 Pro', 'harga' => 'Rp 23.749.000', 'foto' => 'images/IP17pro.jpg', 'kategori' => 'Smartphone'],
        ['id' => 6, 'nama' => 'iPhone 16', 'harga' => 'Rp 14.999.999', 'foto' => 'images/IP16.png', 'kategori' => 'Smartphone'],
        ['id' => 7, 'nama' => 'iPhone 17 ', 'harga' => 'Rp 17.249.000', 'foto' => 'images/iphone17s.jpg', 'kategori'=> 'Smartphone'],
        ['id' => 8, 'nama' => 'iPhone 16 Pro', 'harga'=> 'Rp 17.999.999', 'foto' => 'images/16pro.jpg', 'kategori'=> 'Smartphone'],
        ['id' => 9, 'nama' => 'iPhone 16e', 'harga'=> 'Rp 11.749.000', 'foto' => 'images/16e.jpg', 'kategori'=> 'Smartphone'],
        ['id' => 10, 'nama' => 'iPhone 15', 'harga'=> 'Rp 11.249.000', 'foto' => 'images/15.jpg', 'kategori'=> 'Smartphone'],
        ['id' => 11, 'nama' => 'iPhone 15 Pro', 'harga'=> 'Rp 20.999.000', 'foto' => 'images/15pro.jpg', 'kategori'=> 'Smartphone'],
    ];
    return view('produk', compact('produk'));
})->name('produk');

// ====================
// 🔎 Detail Produk
// ====================
Route::get('/produk/{id}', function ($id) {
    $produk = [
        1 => ['nama' => 'Laptop ASUS VivobBook FLIP T740', 'harga' => 'Rp 8.500.000', 'foto' => 'images/asusvivobook.png', 'deskripsi' => 'Rasakan fleksibilitas tertinggi dengan ASUS Vivobook Flip T740. Laptop 2-in-1 ini dirancang untuk beradaptasi dengan gaya hidup Anda, dilengkapi engsel 360° yang revolusioner dan layar sentuh 14 inci OLED yang memukau. Ditenagai prosesor Intel® Core™ i7 terbaru dan 16GB RAM, Vivobook Flip adalah partner sempurna untuk produktivitas, kreativitas, dan hiburan di mana saja.'],
        2 => ['nama' => 'Samsung A50', 'harga' => 'Rp 4.200.000', 'foto' => 'images/A50.jpg', 'deskripsi' => 'Smartphone Samsung layar AMOLED 6.5 inci dengan kamera 48MP.'],
        3 => ['nama' => 'Camera Canon EOS 1200D', 'harga' => 'Rp 6.750.000', 'foto' => 'images/canoneos1200d.jpg', 'deskripsi' => 'Kamera Canon DSLR dengan lensa kit 18-55mm.'],
        4 => ['nama' => 'Apple Watch Series 5', 'harga' => 'Rp 5.500.000', 'foto' => 'images/applewatch.jpg', 'deskripsi' => 'Smartwatch 44mm dengan Layar Retina Selalu-Nyala, aplikasi EKG, dan pelacak kebugaran.'],
        5 => ['nama' => 'iPhone 17 Pro', 'harga' => 'Rp 23.749.000', 'foto' => 'images/IP17pro.jpg', 'deskripsi' => 'Chip A20 Bionic AI, sistem 5-kamera Perceptual, bodi Titanium Cair, dan kamera under-display.'],
        6 => ['nama' => 'iPhone 16', 'harga' => 'Rp 14.999.999', 'foto' => 'images/IP16.png', 'deskripsi' => 'Chip A19 Bionic, kamera ganda canggih dengan Photonic Engine, dan layar Super Retina XDR.'],
        7 => ['nama' => 'iPhone 17 ', 'harga' => 'Rp 17.249.000', 'foto' => 'images/iphone17s.jpg', 'deskripsi' => 'Chip A20 Bionic, Layar ProMotion 120Hz pertama, dan sistem kamera ganda AI.'],
        8 => ['nama' => 'iPhone 16 Pro', 'harga'=> 'Rp 17.999.999', 'foto'=> 'images/16pro.jpg', 'deskripsi'=> 'Chip A19 Bionic, Bodi Titanium, 3-Kamera Pro 48MP, Layar ProMotion 120Hz, Video ProRes.'],
        9 => ['nama' => 'iPhone 16e', 'harga'=> 'Rp 11.749.000', 'foto'=> 'images/16e.jpg', 'deskripsi'=> 'Chip A17 Bionic bertenaga, Kamera Utama 48MP, desain klasik, dan harga terjangkau.'],
        10 => ['nama' => 'iPhone 15', 'harga'=> 'Rp 11.249.000', 'foto'=> 'images/15.jpg', 'deskripsi'=> 'Chip A16 Bionic, Dynamic Island, Kamera Utama 48MP, dan bodi aluminium berkontur.'],
        11 => ['nama' => 'iPhone 15 Pro', 'harga'=> 'Rp 20.999.000', 'foto'=> 'images/15pro.jpg', 'deskripsi'=> 'Chip A17 Pro, Bodi Titanium, Tombol Tindakan, dan sistem 3-kamera Pro 48MP.'],
    ];

    if (!array_key_exists($id, $produk)) {
        abort(404, 'Produk tidak ditemukan');
    }

    $detail = $produk[$id];
    return view('detail', compact('detail'));
})->name('produk.detail');

// ====================
// 📂 Kategori (tanpa controller)
// ====================
Route::get('/kategori', function () {
    $kategori = [
        ['nama' => 'Laptop', 'deskripsi' => 'Kumpulan produk laptop dari berbagai merek.'],
        ['nama' => 'Smartphone', 'deskripsi' => 'Berbagai jenis smartphone dengan fitur modern.'],
        ['nama' => 'Kamera', 'deskripsi' => 'Kamera profesional dan semi-pro untuk fotografi.'],
        ['nama' => 'Smartwatch', 'deskripsi' => 'Jam tangan pintar dengan fitur kebugaran.'],
        ['nama' => 'Aksesoris', 'deskripsi' => 'Aksesoris pelengkap untuk perangkat elektronik.'],
    ];

    return view('kategori', compact('kategori'));
})->name('kategori');

// ====================
// 💳 Pembayaran
// ====================
Route::post('/pembayaran', function (Request $request) {
    $produk = [
        'nama' => $request->input('nama'),
        'harga' => (int) str_replace(['Rp', '.', ' '], '', $request->input('harga')),
        'jumlah' => $request->input('jumlah'),
    ];
    $produk['total'] = $produk['harga'] * $produk['jumlah'];

    return view('pembayaran', ['produk' => $produk]);
})->name('pembayaran');

// ====================
// ✅ Pembayaran Selesai
// ====================
Route::post('/pembayaran/selesai', function () {
    return view('pembayaran-selesai');
})->name('pembayaran.selesai');

// ====================
// 🚪 Logout
// ====================
Route::get('/logout', function () {
    return redirect()->route('beranda');
})->name('logout');
