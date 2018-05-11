<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App;
class SearchController extends Controller
{
    public function getSearch()

    {
        if ($_GET['str']){
            $str=$_GET['str'];
            $products=Product::where('name','LIKE','%'.$str.'%')->limit(10)->get();

            return view('search',compact('products'));
        }

    }

}
