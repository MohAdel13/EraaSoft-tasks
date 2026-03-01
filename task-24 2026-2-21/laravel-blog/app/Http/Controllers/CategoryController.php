<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function category($category_id)
    {
        $data = Category::showCategory($category_id);
        return view('category', $data);
    }
}
