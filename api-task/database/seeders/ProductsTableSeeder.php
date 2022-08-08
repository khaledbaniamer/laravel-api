<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            [
                'product_name_ar'=>'المنتج الاول',  
                'product_name_en'=> 'first product', 
                'product_price'=> rand(5.00 , 50.00) ,
                'product_description_ar'=> 'هذا وصف للمنتج الاول', 
                'product_description_en'=> 'this description for product number one', 
                'catrgory_id'=> rand(1,4), 
            ],
            [
                'product_name_ar'=>'المنتج الثاني',  
                'product_name_en'=> 'second product', 
                'product_price'=> rand(5.00 , 50.00) ,
                'product_description_ar'=> 'هذا وصف للمنتج الثاني', 
                'product_description_en'=> 'this description for product number two', 
                'catrgory_id'=> rand(1,4), 
            ],
            [
                'product_name_ar'=>'المنتج الثالث',  
                'product_name_en'=> 'third product', 
                'product_price'=> rand(5.00 , 50.00) ,
                'product_description_ar'=> 'هذا وصف للمنتج الثالث', 
                'product_description_en'=> 'this description for product number three',
                'catrgory_id'=> rand(1,4), 
            ],
            [
                'product_name_ar'=>'المنتج الرابع',  
                'product_name_en'=> 'fouth product', 
                'product_price'=> rand(5.00 , 50.00) ,
                'product_description_ar'=> 'هذا وصف للمنتج الرابع', 
                'product_description_en'=> 'this description for product number four', 
                'catrgory_id'=>rand(1,4), 
            ],
            [
                'product_name_ar'=>'المنتج الخامس',  
                'product_name_en'=> 'fifth product', 
                'product_price'=> rand(5.00 , 50.00) ,
                'product_description_ar'=> 'هذا وصف للمنتج الخامس', 
                'product_description_en'=> 'this description for product number five',
                'catrgory_id'=> rand(1,4), 
            ],
            [
                'product_name_ar'=>'المنتج السادس',  
                'product_name_en'=> 'sixth product', 
                'product_price'=> rand(5.00 , 50.00) , 
                'product_description_ar'=> 'هذا وصف للمنتج السادس', 
                'product_description_en'=> 'this description for product number six',
                'catrgory_id'=> rand(1,4), 
            ],
            [
                'product_name_ar'=>'المنتج السابع',  
                'product_name_en'=> 'seventh product', 
                'product_price'=> rand(5.00 , 50.00) ,
                'product_description_ar'=> 'هذا وصف للمنتج السابع', 
                'product_description_en'=> 'this description for product number seven',
                'catrgory_id'=> rand(1,4), 
            ],
            [
                'product_name_ar'=>'المنتج الثامن',  
                'product_name_en'=> 'eighth product', 
                'product_price'=> rand(5.00 , 50.00) ,
                'product_description_ar'=> 'هذا وصف للمنتج الثامن', 
                'product_description_en'=> 'this description for product number eighth',
                'catrgory_id'=> rand(1,4), 
            ],
    ]);
    
    }
}
