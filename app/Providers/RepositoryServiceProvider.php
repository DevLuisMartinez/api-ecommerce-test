<?php 

namespace App\Providers; 

use App\Repositories\EloquentRepositoryInterface; 
use App\Repositories\ProductRepositoryInterface; 
use App\Repositories\Eloquent\ProductRepository; 
use App\Repositories\Eloquent\BaseRepository; 
use Illuminate\Support\ServiceProvider; 

class RepositoryServiceProvider extends ServiceProvider {

    public function register(){

        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
}