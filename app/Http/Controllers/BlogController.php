<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function addBlog()
    {
        return view('admin.blog.addBlog', [
            'categories' => Category::where('publication_status', 1)->get()
        ]);
    }

    public function newBlog(Request $request)
    {
        $image       = $request->file('blog_image');
        $imageName   = $image->getClientOriginalName();
        $directory   = 'blog-image/';
        $image->move($directory, $imageName);

        $blog = new Blog();
        $blog->category_id             =    $request->category_id;
        $blog->blog_title              =    $request->blog_title;
        $blog->blog_short_description  =    $request->blog_short_description;
        $blog->blog_long_description   =    $request->blog_long_description;
        $blog->blog_image              =    $directory . $imageName;
        $blog->publication_status      =    $request->publication_status;
        $blog->save();

        return redirect('/blog/add-blog')->with('message', 'Blog information successfully');
    }

    public function manageBlog()
    {
        $blogs = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->select('blogs.*', 'categories.category_name')
            ->get();

        return view('admin.blog.manageBlog', [
            'blogs' => $blogs
        ]);
    }
}
