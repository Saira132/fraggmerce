<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Front\Redirect;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use DB;

class FrontController extends Controller
{
    public function index(Request $request)
    {   
      
        $products_women = DB::select('select * from product where item_category="women"');
        $products_men = DB::select('select * from product where item_category="men"');
        $products_uni = DB::select('select * from product where item_category="unisex"');
        return view('front.index',['products_women'=>$products_women,'products_men'=>$products_men,'products_uni'=>$products_uni]);
    }

    public function insertform()
    {
        return view('information');
    }

    public function insert(Request $request)
    { 
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->town = $request->town;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->order_id = $request->order_id;
        $user->save(); 
      
        DB::table('order_details')
        ->where('order_id', null)
        ->update(['order_id' => $user->id]);
         
        DB::table('cart')->truncate();
        return view('confirmation');                   
    }
    
    public function insertform_cart() 
    {
        return view('cart');
    }

    public function insert_cart(Request $request)
    {
        $cart = new Cart;
        $cart->item_name = $request->item_name;
        $cart->item_price = $request->item_price;
        $cart->item_image = $request->item_image;
        $cart->item_id = $request->item_id;
        $cart->save();
        $order = new Order;
        $order->item_id = $cart->item_id;
        $order->save();
        return redirect()->back()->with('message', 'Item added to Cart Successfully!');
    }

    

    public function cart(Request $request)
    {    
        $cart = DB::select("select * from cart");
        $related_products = DB::select("select * from product where item_brand='arden'");
        return view('cart',['cart'=>$cart,'related_products'=>$related_products]);
    }

    public function count(Request $request)
    {
        $count = DB::select("Select COUNT(cart_id) as count from cart");
    }

    public function order_info(Request $request)
    {    
        $cart = DB::select("select * from cart");
        return view('information',['cart'=>$cart]);
    }
}
