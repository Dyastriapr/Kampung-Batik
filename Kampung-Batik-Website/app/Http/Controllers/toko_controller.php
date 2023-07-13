<?php

namespace App\Http\Controllers;

// use App\Http\Resources\DetailTokoReseource;
use App\Http\Resources\DetailTokoResource;
// use App\Http\Resources\TokoReseource;
use App\Http\Resources\TokoResource;
use Illuminate\Http\Request;
use App\Models\Product;

class toko_controller extends Controller



{
    public function index(){
        $arrdata = array();
        $product = Product :: all();
        if($product->count() > 0){
            $arrdata = array("code"=>200,"result"=>true, "data"=>$product, "message"=>"");
        }else{
            $arrdata = array("code"=>200,"result"=>false, "data"=>[], "message"=>"No record found");
        }

        return response()->json($arrdata,$arrdata['code']);
        // return response('toko.toko',[
        //     "produk" => $product,
        //     "title" => "toko"
        // ]);


    }

    // public function toko(){
    //     $product = Product :: all();
    //     return TokoResource::collection($product);
    // }

    public function detail($id){
        // return view('toko.detail-produk',[
        //     "title" => "Detail Produk",
        //     "produk" => $produk
        // ]);
        // $product = Product::findOrFail($id);
        // return response()->json(['data'=> $product]);
        // return new DetailTokoResource($product);
        $product = Product::findOrFail($id);
        return view('toko.detail-produk',[
            "produk" => $product,
            "title" => "toko"
        ]);
    }

}
