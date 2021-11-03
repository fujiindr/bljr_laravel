<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function brg(){
        $query = Barang::all();
        return view('barang', compact('query'));
    }
}
