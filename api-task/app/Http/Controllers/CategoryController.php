<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get_categories_ar()
    {
        $categories_ar =Category::select('category_name_ar', 'category_level')->get();

        return $categories_ar;
    }

    public function get_categories_en()
    {
        $categories_en =Category::select('category_name_en', 'category_level')->get();

        return $categories_en;
    }
}
