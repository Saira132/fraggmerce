<?php

namespace App\Http\Controllers\Brands;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class MenBrandsController extends Controller
{

    public function menArmaf(Request $request)
    {   
        $products_armaf = DB::select('select * from product where item_category="men" and item_brand="Armaf"');
        return view('menBrands.armaf',['products_armaf'=>$products_armaf]);
    }

    public function menAcqua(Request $request)
    {   
        $products_acqua = DB::select('select * from product where item_category="men" and item_brand="Acqua"');
        return view('menBrands.acqua',['products_acqua'=>$products_acqua]);
    }

    public function menJimmychoo(Request $request)
    {   
        $products_jimmychoo = DB::select('select * from product where item_category="men" and item_brand="Jimmychoo"');
        return view('menBrands.jimmychoo',['products_jimmychoo'=>$products_jimmychoo]);
    }

    public function menMontblanc(Request $request)
    {   
        $products_montblanc = DB::select('select * from product where item_category="men" and item_brand="Montblanc"');
        return view('menBrands.montblanc',['products_montblanc'=>$products_montblanc]);
    }
    
    public function armaf_search(Request $request, $str)
    {    
        $products_armaf = DB::select("select * from product where item_category='men' and item_brand='armaf' and item_name='$str'");
        return view('menBrands.armaf_search',['products_armaf'=>$products_armaf]);
    }

    public function acqua_search(Request $request, $str)
    {    
        $products_acqua = DB::select("select * from product where item_category='men' and item_brand='acqua' and item_name='$str'");
        return view('menBrands.acqua_search',['products_acqua'=>$products_acqua]);
    }

    public function jimmychoo_search(Request $request, $str)
    {    
        $products_jimmychoo = DB::select("select * from product where item_category='men' and item_brand='jimmychoo' and item_name='$str'");
        return view('menBrands.jimmychoo_search',['products_jimmychoo'=>$products_jimmychoo]);
    }

    public function montblanc_search(Request $request, $str)
    {    
        $products_montblanc = DB::select("select * from product where item_category='men' and item_brand='montblanc' and item_name='$str'");
        return view('menBrands.montblanc_search',['products_montblanc'=>$products_montblanc]);
    }

   
}
