<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('carts')->insert([
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            [
            'product_id'=>rand(1 , 8),  
            'user_id'=> rand(1,3), 
            'quantity'=> rand(1,10), 
            ],
            
    ]);
        
    }
}
