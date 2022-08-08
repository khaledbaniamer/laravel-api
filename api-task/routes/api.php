<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Login API
Route::post("login",[UserController::class,'index']);



Route::group(['middleware' => 'auth:sanctum'], function(){
    //Get Categories
    Route::get("getcategories/ar",[CategoryController::class,'get_categories_ar']);
    Route::get("getcategories/en",[CategoryController::class,'get_categories_en']);

    //Get Products
    Route::get("getproducts/ar/{category_id}/{search_key?}",[ProductController::class,'get_products_ar']);
    Route::get("getproducts/en/{category_id}/{search_key?}",[ProductController::class,'get_products_en']);

    //Add, Update, Remove From Cart
    Route::post('cart/add' , [CartController::class ,'add_product']);
    Route::put('cart/update/{id}', [CartController::class ,'update_product']);
    Route::delete('cart/delete/{id}' , [CartController::class ,'delete_product']);

    //get user cart
    Route::get('cart/get/{user_id}' , [CartController::class , 'get_user_cart']);

    //create order 
    Route::post('order/add/{user_id}',[OrderController::class , 'add_order']);

});