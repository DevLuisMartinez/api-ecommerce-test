<?php

namespace App\Repositories\Eloquent;

use App\Repositories\EloquentRepositoryInterface; 
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface {

    protected $model;

    public function __construct(Model $model){

        $this->model = $model;
    } 

    public function all(){

        return $this->model->all();
    }

    public function find(int $id){

        return $this->model->findOrFail($id);
    }

    public function create( array $attributes ){

        return $this->model->create($attributes);
    }

    public function update( array $attributes, int $id){

        $model = $this->find($id);
        return $model->fill($attributes)->save();
    }

    public function delete(int $id){
        
        return $this->find($id)->delete();
    }
}