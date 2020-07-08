<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Status extends Model{
    
    public function cart(){
        
        return $this->hasMany(Cart::class);
    }
}