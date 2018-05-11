<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
class BaseController extends Controller
{


    public function getStatic($id = null)
    {
        $text = Maintext::where('url', $id)->first();

        return view('static', compact('text'));

    }


}
