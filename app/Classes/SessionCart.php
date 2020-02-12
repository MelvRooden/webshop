<?php

namespace App\Classes;

use session;
use App\Product;
use Illuminate\Http\Request;

class SessionCart
{
    public static function all() {
        $cart = session('cart');
        if (!is_array($cart)) {
            $cart = array();
        };
        return $cart;
    }

    public static function store($product) {
        $cart = self::all();
        if(array_key_exists($product['id'], $cart)) {
            $currentQuantity = self::get($product['id'])["quantity"];
            $product['quantity'] = intval($product['quantity']) + intval($currentQuantity);
            session(['cart.' . $product['id'] => $product]);
        } else {
            session(['cart.' . $product['id'] => $product]);
        }
        
    }

    public static function price() : float
    {
        $cart = self::all();
        $totalPrice = 0;
        $products = Product::find(array_column($cart, 'id'), ['id', 'price']);
        foreach ($products as $product) {
            
            $quantity = $cart[$product->id]['quantity'];
            $totalPrice += $quantity * floatval($product["price"]);
        }
        return $totalPrice;
    }

    public static function update($product) {
        if($product['quantity'] <= 0)
        {
            self::destroy($product['id']);
        } else {
            $cart = self::all();
            $cart[$product["id"]] = $product;
            self::saveCart($cart);
        }
    }
    
    public static function destroy($id)
    {
        $cart = self::all();
        unset($cart[$id]);
        session(['cart' => $cart]);
    }

    public static function get($id) {
        $cart = self::all();
        return $cart[$id];
    }

    public static function saveCart($cart) {
        session(['cart' => $cart]);
    }
}