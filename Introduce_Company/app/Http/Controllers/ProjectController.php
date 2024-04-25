<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $products1 = DB::table("projects")->get();
        return view('projects',['pr1'=>$products1]);
    }
}
