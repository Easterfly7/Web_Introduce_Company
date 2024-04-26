<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $products1 = DB::table("services")->get();
        return view('pages.services.services',['pr1'=>$products1]);
    }
    public function show($id)
    {
        $products1 = DB::table("services")->where("id","=",$id)->get();
        return view('pages.services.services_show',['pr1'=>$products1]);
    }
}
