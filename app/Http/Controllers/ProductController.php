<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{

    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        //
        $this->productRepository = $productRepository;
    }

    public function index(){

        $products = $this->productRepository->all();

        return response()->json($products, 200);
    }

    //
}
