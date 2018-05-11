<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Basket;
use Auth;
use App;


class BasketController extends Controller
{
    public $fancywork;
    public function __construct()
    {
        $this->middleware('auth');
        $this->fancywork =Product::all();
    }

    public function index()

    {
        $fancywork=$this->fancywork;
        $baskets=Basket::get();
        return view('basket',compact('fancywork','baskets'));

    }

    public function getDelete($id=null){
        $obj =  Basket::find($id);

        //Product::where('id',$id)->delete(); или так
        //$pic =\App::make('\App\Libs\Imag')->picdel($obj->picture);
        $obj ->delete();
        return redirect('/basket');
    }

    public function postIndex(ProductRequest $r, $id = null)
    {
        if ($_POST['count']) {
            $str = $_POST['count'];
            $r['quantity'] = $str;
        }
            $r['user_id'] = Auth::user()->id;
            //unset($r['_token']);

            $obj = Product::find($id);
            $obj->name1 = $r['title'];
            $obj->price1 = $r['price'];
            $obj->picture1 = $r['picture'];
        $obj->size1 = $r['size']->add;

            $price= $r['price'];
            $r['amount']=$str*$price;
            //dd($r->all());
            //dd($r->all());
            Basket::create($r->all());
            return redirect('oneproduct');



    }


}



