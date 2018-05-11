<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable=['title','price','quantity','amount','picture','size'];
    public function products(){
        return $this->belongsTo('App\Product','title','price','picture');
    }
}

