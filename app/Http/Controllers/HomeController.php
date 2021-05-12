<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function prodotti() {
        // Select * From products
        $prodotti = Product::all();

        $data = [
            'scarpe' => $prodotti
        ];
        return view('prodotti', $data);
    }
}
