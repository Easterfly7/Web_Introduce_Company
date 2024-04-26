<?php

namespace App\Http\Controllers;
use App\Models\Product_Type;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTypeController extends Controller
{
    public function index()
    {
        $products1 = DB::table("product_types")->where("type",1)->get();
        $products2 = DB::table("product_types")->where("type",2)->get();
        $cn = 0;
        return view('pages.products.product',['pr1'=>$products1,'pr2'=>$products2,'cn'=>$cn]);
    }
}
