<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface {

    public function all();

    public function find(int $id);

    public function create(array $attributes);

    public function update(array $attributes, int $id);

    public function delete(int $id);
}