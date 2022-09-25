<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class ProductController extends Controller
{
    public function product(Request $request, $id)
    {    
        $products = DB::select("select * from product where item_id='$id'");
        $related_products = DB::select("select * from product where item_brand='arden'");
        return view('products.product',['products'=>$products,'related_products'=>$related_products]);
    }
    
    public function search(Request $request, $str)
    {    
        $products_armaf = DB::select("select * from product where item_category='men' and item_brand='armaf' and item_name='$str'");
        return view('products.search',['products_armaf'=>$products_armaf]);
    }
}
