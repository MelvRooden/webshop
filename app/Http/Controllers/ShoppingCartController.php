<?php

namespace App\Http\Controllers;


use App\Classes\SessionCart;
use App\Product;

use Illuminate\Http\Request;


class ShoppingCartController extends Controller
{
    public function index()
    {
        $cart = SessionCart::all();
        $products = Product::find(array_column($cart, 'id'))->toArray();
        $cartItems = array();
        foreach ($cart as $cartItem) {
            $product = $products[array_search($cartItem["id"], array_column($products, 'id'))];
            $cartItems[] = array_merge($cartItem, $product);   
        }

        return view('shoppingcart.cart', ['cartItems' => $cartItems, 'totalPrice' => SessionCart::price()]);
    }

    public function add(Request $request)
    {
        // $product = Product::find($productId);


    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        SessionCart::store(['id' => $request->id, 'quantity' => $request->quantity]);
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        ?> test <?php
        $product = SessionCart::get($request->id);
        $product['quantity'] = $request->quantity;
        SessionCart::update($product);
        return redirect("/shoppingCart");
    }

    public function destroy(request $request)
    {
        SessionCart::destroy($request->id);
        return redirect('/shoppingCart');
    }
}