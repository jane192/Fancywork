<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App;
use Auth;
class CommentController extends Controller
{


    public function Index()

    {
        $comments=Comment::all();
        return view('comment',compact('comments'));

    }
    public function postIndex(CommentRequest $r){


        $r['user_id']=Auth::user()->id;
        //unset($r['_token']);


        //dd($r->all());
        //dd($r->all());
        Comment::create($r->all());
        return redirect('comment');

    }
}
