<?php

namespace App\Http\Controllers;

use App\Repositories\CartRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{

    private $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        //
        $this->cartRepository = $cartRepository;
    }

    public function index(){

        $carts = $this->cartRepository->all();

        return response()->json($carts, 200);
    }

    public function getCart(int $id){

        $cart = $this->cartRepository->find($id);

        return response()->json($cart, 200);
    }

    public function addProductsCart(Request $request){
        
        $last_cart = $this->cartRepository->getLastRecord();

        if(is_null($last_cart) || Str::lower($last_cart->status->description) == 'pending'){

            $cart = $this->cartRepository->addProductsCart($request->all());
            return response()->json($cart, 200);
        }

        $cart = $this->cartRepository->create($request->all());
        return response()->json($cart, 200);
    }

    public function checkoutCart(){

        $cart = $this->cartRepository->getLastRecord()->update(['status_id' => 2]);
        return response()->json($cart, 200);
    }

    //
}
