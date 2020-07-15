<?php 

namespace App\Providers; 

use App\Repositories\CartRepositoryInterface; 
use App\Repositories\EloquentRepositoryInterface; 
use App\Repositories\ProductRepositoryInterface; 
use App\Repositories\Eloquent\BaseRepository; 
use App\Repositories\Eloquent\CartRepository;
use App\Repositories\Eloquent\ProductRepository; 
use Illuminate\Support\ServiceProvider; 

class RepositoryServiceProvider extends ServiceProvider {

    public function register(){

        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
    }
}