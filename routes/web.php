<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lat1/{nama?}/{indo?}/{ing?}/{mtk?}/{pro?}', function ($nama = null, $indo = 95, $ing = 85, $mtk = 90, $pro = 100) {
    echo "Nama : " . $nama . "<br>";
    echo "Nilai Bahasa Indonesia : " . $indo . "<br>";
    echo "Nilai Bahasa Inggris : " . $ing . "<br>";
    echo "Nilai Matematika : " . $mtk . "<br>";
    echo "Nilai Produktif : " . $pro . "<br>";
    $rata = ($indo + $ing + $mtk + $pro) / 2;
    echo "Rata-rata : " . $rata . "<br>";
    echo "Grade : ";
    if ($rata >= 90) {
        echo "A";
    } elseif ($rata >= 80) {
        echo "B";
    } elseif ($rata >= 70) {
        echo "C";
    } else {
        echo "D";
    }
});

// Route::get('/barang', function () {
//     $query = App\Models\Barang::all();
//     return view('barang', compact('query'));

// });

// Route::get('/pembelian', function () {
//     $query = App\Models\Pembelian::all();
//     return view('pembelian', compact('query'));

// });

// Route::get('/pembeli', function () {
//     $query = App\Models\Pembeli::all();
//     return view('pembeli', compact('query'));

// });

// Route::get('/pesanan', function () {
//     $query = App\Models\Pesanan::all();
//     return view('pesanan', compact('query'));

// });

// Route::get('/suplier', function () {
//     $query = App\Models\Suplier::all();
//     return view('suplier', compact('query'));

// });

Route::get('/barang', [BarangController::class,'brg']);

Route::get('/pesanan', [PesananController::class,'pesanan']);

Route::get('/pembelian', [PembelianController::class,'pembelian']);

Route::get('/pembeli', [PembeliController::class,'pembeli']);

Route::get('/suplier', [SuplierController::class,'suplier']);
