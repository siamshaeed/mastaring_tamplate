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
            ->orderBy('blogs.id', 'desc')
            ->get();

        return view('admin.blog.manageBlog', [
            'blogs' => $blogs
        ]);
    }

    public function editBlog($id){
        return view('admin.blog.editBlog', [
            'categories' => Category::where('publication_status', 1)->get(),
            'blog' => Blog::find($id)
        ]);
    }

    public function UpdateBlog(Request $request){
       $blogImage  = $request->file('blog_image');
       if($blogImage){
        $blog = Blog::find($request->id);
        unlink($blog->blog_image);

        $imageName   = $blogImage->getClientOriginalName();
        $directory   = 'blog-image/';
        $blogImage->move($directory, $imageName);

        $blog->category_id             =    $request->category_id;
        $blog->blog_title              =    $request->blog_title;
        $blog->blog_short_description  =    $request->blog_short_description;
        $blog->blog_long_description   =    $request->blog_long_description;
        $blog->blog_image              =    $directory.$imageName;
        $blog->publication_status      =    $request->publication_status;
        $blog->save();

        return redirect('/blog/manage-blog')->with('message', 'Blog information update successfully');

       }else{
        $blog = Blog::find($request->id);
        

        $blog->category_id             =    $request->category_id;
        $blog->blog_title              =    $request->blog_title;
        $blog->blog_short_description  =    $request->blog_short_description;
        $blog->blog_long_description   =    $request->blog_long_description;
        $blog->publication_status      =    $request->publication_status;
        $blog->save();

        return redirect('/blog/manage-blog')->with('message', 'Blog information update successfully');
       }
    }

    public function deleteBlog(Request $request){
        $blog = Blog::find($request->id);
        unlink($blog->blog_image);
        $blog->delete();
        return redirect('/blog/manage-blog')->with('message', 'Blog information delete successfully');
    }
}
