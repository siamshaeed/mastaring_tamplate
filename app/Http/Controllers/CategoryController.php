<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.addCategory');
    }

    public function newCategory(Request $request)
    { 
        // for connect category model
        Category::saveCategoryInfo($request);

        // for message show and redirect
         return redirect('/category/add-category')->with('message', 'Category information save successfully '); 
    }
}
