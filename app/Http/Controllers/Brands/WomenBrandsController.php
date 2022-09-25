<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class WomenBrandsController extends Controller
{


    public function womenEmper(Request $request)
    {   
        $products_emper = DB::select('select * from product where item_category="women" and item_brand="Emper"');
        return view('womenBrands.emper',['products_emper'=>$products_emper]);
    }

    public function womenYsl(Request $request)
    {   
        $products_ysl = DB::select('select * from product where item_category="women" and item_brand="Ysl"');
        return view('womenBrands.ysl',['products_ysl'=>$products_ysl]);
    }

    public function womenVersace(Request $request)
    {   
        $products_versace = DB::select('select * from product where item_category="women" and item_brand="Versace"');
        return view('womenBrands.versace',['products_versace'=>$products_versace]);
    }

    public function womenNina(Request $request)
    {   
        $products_nina = DB::select('select * from product where item_category="women" and item_brand="Nina"');
        return view('womenBrands.nina',['products_nina'=>$products_nina]);
    }

    public function emper_search(Request $request, $str)
    {    
        $products_emper = DB::select("select * from product where item_category='women' and item_brand='emper' and item_name='$str'");
        return view('womenBrands.emper_search',['products_emper'=>$products_emper]);
    }

    public function ysl_search(Request $request, $str)
    {    
        $products_ysl = DB::select("select * from product where item_category='women' and item_brand='ysl' and item_name='$str'");
        return view('womenBrands.ysl_search',['products_ysl'=>$products_ysl]);
    }

    public function versace_search(Request $request, $str)
    {    
        $products_versace = DB::select("select * from product where item_category='women' and item_brand='versace' and item_name='$str'");
        return view('womenBrands.versace_search',['products_versace'=>$products_versace]);
    }

    public function nina_search(Request $request, $str)
    {    
        $products_nina = DB::select("select * from product where item_category='women' and item_brand='nina' and item_name='$str'");
        return view('womenBrands.nina_search',['products_nina'=>$products_nina]);
    }
}
