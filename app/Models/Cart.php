<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Cart extends Model{

    protected $table = 'carts';
    protected $fillable = ['status_id'];
    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'products_carts')->withPivot('quantity');
    }
}