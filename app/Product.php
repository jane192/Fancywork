<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','price','picture','size','catalog_id'];

    public function baskets(){
        return $this->hasMany('App\Basket','name','price','picture','size');
    }

}
