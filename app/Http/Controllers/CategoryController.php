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

    public function manageCategory(){
        $categories = Category::all();
        return view('admin.category.manageCategory',[
        'categories' => $categories
        ]);
    }

    public function editCategory($id){
         
        return view('admin.category.editCategory',[
            'categories' =>  Category::find($id)
        ]);
    }

    public function updateCategory(Request $request){
        // for connect category model
        Category::updateCategoryInfo($request);
         // for message show and redirect
        return redirect('/category/manage-category')->with('message', 'Category information update successfully '); 
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage-category')->with('message', 'Category information delete successfully '); 
    }
}
