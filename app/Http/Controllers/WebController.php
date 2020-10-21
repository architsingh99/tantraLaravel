<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\Product;
use App\Service;
use App\ProductsCategory;
use App\Cart;
use App\Pincode;

class WebController extends Controller
{
    //
    public function sendResponse($data, $message) {
            $response = [
                'code'    => 200,
                'status'  => true,
                'data'    => $data,
                'message' => $message,
            ];

    	return response()->json($response, 200);
    }

    public function home(Request $request)
    {
        $service = Service::all();
        $cat = Category::all();
        $product = Product::orderBy("id", "desc")->take(12)->get();
        return view('welcome')->with('service', $service)->with('cat', $cat)->with('product', $product);
    }

    public function service(Request $request)
    {
        $cat = Category::all();
        return view('services')->with('cat', $cat);
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
        $cat = ProductsCategory::all();
        return view('product')->with('products', $product)->with('cat', $cat);
    }

    public function products2(Request $request)
    {
        $product = Product::where('category', $request->category)->get();
        $cat = ProductsCategory::all();
        return view('product')->with('products', $product)->with('cat', $cat);
    }

    public function productDetails(Request $request)
    {
        $product = Product::find($request->id);
        return view('product_details')->with('product', $product);
    }

    public function addToCart(Request $request)
    {
        $userInCart = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->input('product'))->get();
        if(count($userInCart) == 0)
        {
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->input('product_id');  
        $cart->quantity = $request->input('quantity');  
        $cart->save();
        }
        else
        {
            $quantity = $request->input('quantity') + $userInCart[0]->quantity;
            DB::table('carts')
            ->where('id', $userInCart[0]->id)
            ->update(['quantity' => $quantity]);
        }
        $data  = [
            'status'                     => 200,
            'message'                    => "Added to Cart"
     ];
        return $this->sendResponse($data, "Success");
    }

    public function checkPincode(Request $request)
    {
        $pincode = Pincode::where('pincode', $request->input('pincode'))->get();
        if(count($pincode) == 0)
        {
        $message = "Sorry!! We do not deliver to this pincode.";
        }
        else
        {
            $message = "Delivery in " . $pincode[0]->days_for_delivery . " days. Delivery Charge: " . $pincode[0]->delivery_charge ;
        }
        $data  = [
            'status'                     => 200,
            'message'                    => $message
     ];
        return $this->sendResponse($data, "Success");
    }

    public function cart(Request $request)
    {
        $cart = Cart::with('product')->where('user_id', Auth::user()->id)->get();
        return view('carts')->with('cart', $cart);
    }

    public function deleteFromCart(Request $request)
    {
        Cart::find($request->id)->delete();
        $cart = Cart::with('product')->where('user_id', Auth::user()->id)->get();
        return view('carts')->with('cart', $cart);
    }

    public function updateCart(Request $request)
    {
        DB::table('carts')
            ->where('id', $request->input('id'))
            ->update(['quantity' => $request->input('quantity')]);
            $data  = [
                'status'                     => 200,
                'message'                    => "Cart Updated"
         ];
            return $this->sendResponse($data, "Success");
    }
}
