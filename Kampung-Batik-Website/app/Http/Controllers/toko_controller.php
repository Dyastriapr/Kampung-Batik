<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetailTokoReseource;
use App\Http\Resources\TokoReseource;
use Illuminate\Http\Request;
use App\Models\Product;

class toko_controller extends Controller
{
    public function index(){

        $product = Product :: all();
        // return response()->json(['data'=> $product]);
        return TokoReseource::collection($product);

        // return vie('toko.toko',[
        //     "title" => "Toko",
        //     "produk" => Product::all()
        // ]);
    }
    public function detail($id){
        // return view('toko.detail-produk',[
        //     "title" => "Detail Produk",
        //     "produk" => $produk
        // ]);
        $product = Product::findOrFail($id);
        // return response()->json(['data'=> $product]);
        return new DetailTokoReseource($product);
    }
    
}
