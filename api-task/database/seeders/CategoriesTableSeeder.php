<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            DB::table('categories')->insert([
                [
                'category_name_ar'=>'الصنف الاول',  
                'category_name_en'=> 'first Category', 
                'category_level'=> 0, 
                ],
                [
                'category_name_ar'=>'الصنف الثاني',  
                'category_name_en'=> 'second Category', 
                'category_level'=> 0, 
                ],
                [
                'category_name_ar'=>'الصنف الثالث',  
                'category_name_en'=> 'third  Category', 
                'category_level'=> 0, 
                ],
                [
                'category_name_ar'=>'الصنف الرابع',  
                'category_name_en'=> 'fouth Category', 
                'category_level'=> 0, 
                ],
        ]);
        
    }
}
