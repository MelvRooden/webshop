<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use App\product;
use App\Classes\SessionCart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function index()
    {
        // var_dump(Order::all());
        // exit();
        return view('order.index', ['orders' => Order::all()]);
    }

    public function store(request $request)
    {        
        $order = new Order;

        $order->user_id = Auth::user()->id;

        $order->save();



        $cart = SessionCart::all();
        $products = Product::find(array_column($cart, 'id'))->toArray();

        foreach ($products as $product) {

            $orderProduct = new OrderProduct;

            // $orderProduct->order_id = Order::whereRaw('id = (select max(`id`) from orders)')->get();
            $orderProduct->order_id = $order->id;

            $orderProduct->product_id = $product['id'];
            $orderProduct->price = $product['price'];
            $orderProduct->quantity = SessionCart::get($product['id'])['quantity'];

            // echo "<br>";echo "<br>";echo "<br>";

            // $test = Order::whereRaw('id = (select max(`id`) from orders)')->get();
            // var_dump($test);

            // echo "<br>";echo "<br>";
            // var_dump($orderProduct->order_id);
            // echo "<br>";echo "<br>";
            // var_dump($orderProduct->product_id);
            // echo "<br>";echo "<br>";
            // var_dump($orderProduct->price);
            // echo "<br>";echo "<br>";
            // var_dump($orderProduct->quantity);

            // exit();
            
            $orderProduct->save();
            SessionCart::destroy($product['id']);
        }
        return redirect("/");
    }

    public function show($id)
    {

    }
}