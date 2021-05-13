<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(6);

        return view('index', [
            'products' => $products   
        ]);
    }
}
