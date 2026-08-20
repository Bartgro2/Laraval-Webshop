<?php

namespace App\Http\Controllers;

use app\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
}
