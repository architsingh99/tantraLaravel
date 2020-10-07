<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Service;

class WebController extends Controller
{
    //
    public function home(Request $request)
    {
        $service = Service::all();
        $cat = Category::all();
        $product = Product::all();
        return view('welcome')->with('service', $service)->with('cat', $cat)->with('product', $product);
    }
}
