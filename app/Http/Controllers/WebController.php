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

    public function services(Request $request)
    {
        $cat = Service::where('category', $request->id)->get();
        return view('tantra_class')->with('cat', $cat);
    }

    public function servicesDetails(Request $request)
    {
        $service = Service::find($request->id);
        $cat = Service::where('category', $service->category)->get();
        $category = Category::find($service->category);
        return view('services_details')->with('service', $service)->with('cat', $cat)->with('category', $category);
    }

    public function products(Request $request)
    {
        $product = Product::all();
        return view('product')->with('products', $product);
    }

    public function productDetails(Request $request)
    {
        $product = Product::find($request->id);
        return view('product_details')->with('product', $product);
    }
}
