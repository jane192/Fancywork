<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
use App;

class HomeController extends Controller
{

    public $fancywork;
    public function __construct()
    {
        $this->middleware('auth');
        $this->fancywork =Product::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $products=Product::orderBy('id','DESC')->paginate(5);
        return view('home',compact('products'));

    }

}

