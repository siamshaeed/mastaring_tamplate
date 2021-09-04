<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){
        return view('admin.blog.addBlog',[
            'categories' => Category::where('publication_status', 1)->get()
        ]);
    }

    public function newBlog(){
        return view('admin.blog.newBlog');
    }
}