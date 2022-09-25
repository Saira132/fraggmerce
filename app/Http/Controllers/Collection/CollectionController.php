<?php

namespace App\Http\Controllers\Collection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class CollectionController extends Controller
{

    public function menCollection(Request $request)
    {   
        $products_men = DB::select('select * from product where item_category="men"');
        return view('collections.menCollection',['products_men'=>$products_men]);
    }

    public function womenCollection(Request $request)
    {   
        $products_women = DB::select('select * from product where item_category="women"');
        return view('collections.womenCollection',['products_women'=>$products_women]);
    }

    public function unisexCollection(Request $request)
    {   
        $products_uni = DB::select('select * from product where item_category="unisex"');
        return view('collections.unisexCollection',['products_uni'=>$products_uni]);
    }

    
    
}
