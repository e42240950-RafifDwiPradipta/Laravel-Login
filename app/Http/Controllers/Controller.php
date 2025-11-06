<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
// Pastikan file ini ada di app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // <-- 1. PASTIKAN INI ADA (untuk memanggil data produk)

class ProductController extends Controller
{
    /**
     * Menampilkan halaman daftar produk.
     */
    public function index() // <-- 2. INI ADALAH FUNGSINYA
    {
        // 3. INI ADALAH LOGIKA UNTUK MENGAMBIL DAN MENGIRIM DATA
        
        // Ambil semua data produk dari tabel 'products'
        $products = Product::all(); 

        // Kirim data tersebut ke view 'produk'
        // 'compact('products')' adalah cara mengirim variabel $products ke view
        return view('produk', compact('products')); 
    }

    // Mungkin ada fungsi-fungsi lain di sini...
}