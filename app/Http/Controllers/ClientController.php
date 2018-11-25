<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function login()
    {
        return view('webshop/client/login');
    }

    public function profile()
    {
        $client = Client::all();

        return view('webshop/client/profile');
    }
}
