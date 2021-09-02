<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.addCategory');
    }

    public function newCategory(Request $request){
        return $request->all();
    }
}
