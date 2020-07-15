<?php

namespace App\Repositories;

use App\Models\Cart;

interface CartRepositoryInterface {

    public function all();

    public function find(int $id);

    public function create(array $attributes);

    public function update(array $attributes, int $id);

    public function addProductsCart(array $attributes);

    public function getLastRecord();
}

