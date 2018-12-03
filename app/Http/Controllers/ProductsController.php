<?php

namespace App\Http\Controllers;

use App\Project;

class ProductsController extends Controller
{
    public function home()
    {
        $products = Products::all();

        return view('products/home', [
            'products' => $products
        ]);
    }
}
