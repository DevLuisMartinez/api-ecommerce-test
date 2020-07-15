<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Status extends Model{
    
    protected $table = 'status';

    public function carts(){
        
        return $this->hasMany(Cart::class);
    }
}