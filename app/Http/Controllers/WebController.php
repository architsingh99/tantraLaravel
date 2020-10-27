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
use App\ProductsOrder;
use App\ServicesOrder;
use App\Suborder;

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

    public function checkout(Request $request)
    {
        $cart = Cart::with('product')->where('user_id', Auth::user()->id)->get();
        return view('checkout')->with('cart', $cart);
    }

    public function pincodeCheck(Request $request)
    {
        $pincode = Pincode::where('pincode', $request->input('pincode'))->get();
        if(count($pincode) == 0)
        {
            $status = 201;
        $message = "Sorry!! We do not deliver to this pincode.";
        $deliveryCharge = 0;
        }
        else
        {
            $status = 200;
            $message = "Delivery in " . $pincode[0]->days_for_delivery . " days. Delivery Charge: " . $pincode[0]->delivery_charge ;
            $deliveryCharge = $pincode[0]->delivery_charge;
        }
        $data  = [
            'status'                     => $status,
            'message'                    => $message,
            'deliveryCharge'             => $deliveryCharge
     ];
        return $this->sendResponse($data, "Success");
    }

    public function paysuccess(Request $request){
        $cart = Cart::with('product')->where('user_id', Auth::user()->id)->get();
        $total_item =DB::table('carts')->where('user_id', auth()->user()->id)->count();
        foreach($cart as $key => $value)
        {
            $suborder = new Suborder();
            $suborder->product_name = $value->product->name;
            $suborder->order_id = $request->input('razorpay_order_id');  
            $suborder->price = $value->product->selling_price;  
            $suborder->quantity = $value->quantity; 
            $suborder->total = ($value->product->selling_price * $value->quantity);  
            $suborder->save();
            Cart::find($value->id)->delete();
        }
        $order = new ProductsOrder();
        $order->user_id = Auth::user()->id;
        $order->order_id = $request->input('razorpay_order_id');  
        $order->payment_id = $request->input('razorpay_payment_id');  
        $order->total_items = $total_item;  
        $order->subtotal = $request->input('subtotal');  
        $order->name = $request->input('name');  
        $order->phone_number = $request->input('phone');  
        $order->address = $request->input('address');  
        $order->landmark = $request->input('landmark');  
        $order->pincode = $request->input('pincode');  
        $order->delivery_charges = $request->input('deliveryCharge');  
        $order->total_amount = $request->input('totalAmount');  
        $order->save();
        $arr = array('msg' => 'Payment successfully credited', 'status' => true);
        return Response()->json($arr);    
        }

        public function payService(Request $request){
            $services = Service::find($request->input('service_id'));
            $service = new ServicesOrder();
            $service->name = $services->name;
            $service->duration = $request->input('duration');  
            $service->price = $request->input('price');  
            $service->user_id = Auth::user()->id;  
            $service->order_id = $request->input('razorpay_order_id');  
            $service->payment_id = $request->input('razorpay_payment_id'); 
            $service->save();
            $arr = array('msg' => 'Payment successfully credited', 'status' => true);
            return Response()->json($arr);    
            }
}
