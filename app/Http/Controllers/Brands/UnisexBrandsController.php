<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UnisexBrandsController extends Controller
{

    public function unisexArden(Request $request)
    {   
        $products_arden = DB::select('select * from product where item_category="unisex" and item_brand="Arden"');
        return view('unisexBrands.arden',['products_arden'=>$products_arden]);
    }

    public function unisexAfnan(Request $request)
    {   
        $products_afnan = DB::select('select * from product where item_category="unisex" and item_brand="Afnan"');
        return view('unisexBrands.afnan',['products_afnan'=>$products_afnan]);
    }

    public function unisexJuicy(Request $request)
    {   
        $products_juicy = DB::select('select * from product where item_category="unisex" and item_brand="Juicy"');
        return view('unisexBrands.juicy',['products_juicy'=>$products_juicy]);
    }

    public function unisexMontale(Request $request)
    {   
        $products_montale = DB::select('select * from product where item_category="unisex" and item_brand="Montale"');
        return view('unisexBrands.montale',['products_montale'=>$products_montale]);
    }

    public function arden_search(Request $request, $str)
    {    
        $products_arden = DB::select("select * from product where item_category='unisex' and item_brand='Arden' and item_name='$str'");
        return view('unisexBrands.arden_search',['products_arden'=>$products_arden]);
    }

    public function afnan_search(Request $request, $str)
    {    
        $products_afnan = DB::select("select * from product where item_category='unisex' and item_brand='afnan' and item_name='$str'");
        return view('unisexBrands.afnan_search',['products_afnan'=>$products_afnan]);
    }

    public function juicy_search(Request $request, $str)
    {    
        $products_juicy = DB::select("select * from product where item_category='unisex' and item_brand='juicy' and item_name='$str'");
        return view('unisexBrands.juicy_search',['products_juicy'=>$products_juicy]);
    }

    public function montale_search(Request $request, $str)
    {    
        $products_montale = DB::select("select * from product where item_category='unisex' and item_brand='montale' and item_name='$str'");
        return view('unisexBrands.montale_search',['products_montale'=>$products_montale]);
    }
}
