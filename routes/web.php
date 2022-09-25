<?php

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Collection\CollectionController;
use App\Http\Controllers\Brands\MenBrandsController;
use App\Http\Controllers\Brands\WomenBrandsController;
use App\Http\Controllers\Brands\UnisexBrandsController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontController::class,'index']);
Route::get('menCollection',[CollectionController::class,'menCollection']);
Route::get('womenCollection',[CollectionController::class,'womenCollection']);
Route::get('unisexCollection',[CollectionController::class,'unisexCollection']);

Route::get('menCollection/armaf',[MenBrandsController::class,'menArmaf']);
Route::get('menCollection/acqua',[MenBrandsController::class,'menAcqua']);
Route::get('menCollection/jimmychoo',[MenBrandsController::class,'menJimmychoo']);
Route::get('menCollection/montblanc',[MenBrandsController::class,'menMontblanc']);

Route::get('womenCollection/emper',[WomenBrandsController::class,'womenEmper']);
Route::get('womenCollection/ysl',[WomenBrandsController::class,'womenYsl']);
Route::get('womenCollection/versace',[WomenBrandsController::class,'womenVersace']);
Route::get('womenCollection/nina',[WomenBrandsController::class,'womenNina']);

Route::get('unisexCollection/arden',[UnisexBrandsController::class,'unisexArden']);
Route::get('unisexCollection/afnan',[UnisexBrandsController::class,'unisexAfnan']);
Route::get('unisexCollection/juicy',[UnisexBrandsController::class,'unisexJuicy']);
Route::get('unisexCollection/montale',[UnisexBrandsController::class,'unisexMontale']);

Route::get('product/{id}',[ProductController::class,'product']);

Route::get('acqua_search/{str}',[MenBrandsController::class,'acqua_search']);
Route::get('armaf_search/{str}',[MenBrandsController::class,'armaf_search']);
Route::get('jimmychoo_search/{str}',[MenBrandsController::class,'jimmychoo_search']);
Route::get('montblanc_search/{str}',[MenBrandsController::class,'montblanc_search']);

Route::get('emper_search/{str}',[WomenBrandsController::class,'emper_search']);
Route::get('ysl_search/{str}',[WomenBrandsController::class,'ysl_search']);
Route::get('versace_search/{str}',[WomenBrandsController::class,'versace_search']);
Route::get('nina_search/{str}',[WomenBrandsController::class,'nina_search']);

Route::get('arden_search/{str}',[UnisexBrandsController::class,'arden_search']);
Route::get('afnan_search/{str}',[UnisexBrandsController::class,'afnan_search']);
Route::get('juicy_search/{str}',[UnisexBrandsController::class,'juicy_search']);
Route::get('montale_search/{str}',[UnisexBrandsController::class,'montale_search']);

Route::get('information',[FrontController::class,'order_info']);
Route::post('submit',[FrontController::class,'insert']);



Route::post('cart',[FrontController::class,'insert_cart']);

Route::get('cart',[FrontController::class,'cart']);
