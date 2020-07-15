<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Product extends Model{

    protected $table = 'products';

    public function carts(){
        return $this->belongsToMany(Cart::class, 'products_carts');
    }
}