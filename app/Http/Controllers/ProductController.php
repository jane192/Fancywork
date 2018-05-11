<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use App;

class ProductController extends Controller
{
    public function getIndex()

    {

        $products = Product::orderBy('id', 'DESC')->paginate(10);
        return view('main', compact('products'));
    }

    public function getTypeOne($id = NULL)

    {

        $products = Product::where('catalog_id', 1)->paginate(10);
        return view('breads', compact('products'));
    }

    public function getTypeTwo($id = NULL)

    {

        $products = Product::where('catalog_id', 2)->paginate(10);
        return view('threads', compact('products'));
    }

    public function getProduct($id = NULL)
    {
        $products = Product::find($id);
        return view('oneproduct', compact('products'));
    }

    public function postIndex(ProductRequest $r)
    {


        $r['user_id'] = Auth::user()->id;
        //unset($r['_token']);


        Product::create($r->all());
        return redirect('basket');

    }

}
