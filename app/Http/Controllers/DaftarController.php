<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class DaftarController extends Controller
{
    

    public function tampildaftar()
      {
         $daftar = Daftar::select('*')
              ->get();
         return view('tampildaftar', ['daftar' => $daftar]);
      }

    public function tambahdaftar()
    {
        return view('tambahdaftar');
    }

    public function simpandaftar(Request $request)
    {
        $daftar = Daftar::create([
            'nama_produk' => $request->nama_produk,
            'image' => $request->image,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()->route('tampildaftar');
    }

}
