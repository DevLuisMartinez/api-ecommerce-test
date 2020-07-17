<?php

namespace App\Services;

use App\Models\Cart;

class CartService {

    private $model;
    public function __construct(Cart $model){

        $this->model = $model;
    }

    public function CartIsCompleted(){

        
    }
}