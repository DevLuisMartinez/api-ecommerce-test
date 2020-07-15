<?php

namespace App\Repositories\Eloquent;

use App\Models\Cart;
use App\Repositories\CartRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class CartRepository extends BaseRepository implements CartRepositoryInterface{

    public function __construct(Cart $model){

        parent::__construct($model);
    }

    public function all(){

        return $this->model->all();
    }

    public function find(int $id){

        return $this->model->find($id);
    }

    public function create( array $attribute = []){
        
        return $this->model->create()->products()->attach( $attribute['products'] );
    }
    
    public function update(array $attributes, int $id){

        return $this->model->update($attributes, $id);
    }

    public function addProductsCart( array $attribute){

        $this->getLastRecord()->products()->attach($attribute['products']);
    }

    public function getLastRecord(){

        return $this->model->latest('created_at')->first();
    }


}   