<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model{

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'products_carts');
    }
}