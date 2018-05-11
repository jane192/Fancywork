<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App;
class AjaxController extends Controller
{

    public function getPost(BasketRequest $result, $id=null){
        if ($_POST['id']){
        $id = (int)$_POST['id'];

        $result=Product::find($id);
        return view('menu', compact('result'));
        }
    }

}


