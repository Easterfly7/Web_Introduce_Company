<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{

    public function list($id)
    {
       $product = DB::table("products")->where("product_type_id", $id)->get();
       $type = DB::table("product_types")->where("id", $id)->first("type");
        $type2 = DB::table("product_types")->where("id", $id)->get();
       return view('pages.products.list_product',['pr1'=>$product,'type'=>$type,'type2'=>$type2]);
    }
    public function show($id)
    {
        $product = DB::table('products')->where('id',$id)->get();
        return view('pages.products.show_product',['pr1'=>$product,]);
    }
}
