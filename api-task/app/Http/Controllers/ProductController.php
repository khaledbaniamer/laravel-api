<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_products_ar($category_id , $search_key=null)
    {
        if($search_key){
            $products = Product::select('products.product_name_ar','products.product_price' ,'products.product_description_ar' , 'categories.category_name_ar')
            ->join('categories','categories.id' , '=' ,'products.catrgory_id')
            ->where('product_name_ar' , 'like' , '%'.$search_key .'%')
            ->orWhere('product_description_ar' , 'like' , '%'.$search_key .'%')
            ->where('catrgory_id',$category_id)
            ->get();

            return $products;

        }
        $products =Product::select('products.product_name_ar','products.product_price' ,'products.product_description_ar' , 'categories.category_name_ar')->join('categories','categories.id' , '=' ,'products.catrgory_id' )->where('catrgory_id',$category_id)->get();
        return $products;
    }

    
    public function get_products_en($category_id , $search_key=null)
    {
        if($search_key){
            $products = Product::select('products.product_name_en','products.product_price' ,'products.product_description_en' , 'categories.category_name_en')
            ->join('categories','categories.id' , '=' ,'products.catrgory_id')
            ->where('product_name_en' , 'like' , '%'.$search_key .'%')
            ->orWhere('product_description_en' , 'like' , '%'.$search_key .'%')
            ->where('catrgory_id',$category_id)
            ->get();

            return $products;

        }
        $products =Product::select('products.product_name_en','products.product_price' ,'products.product_description_en' , 'categories.category_name_en')->join('categories','categories.id' , '=' ,'products.catrgory_id' )->where('catrgory_id',$category_id)->get();
        return $products;
    }
}
