@extends('admin.master')

<!-- for title  -->
@section('title')
Add Blog | Blog
@endsection

<!-- for body -->
@section('body')
<div class="row">
  <div class="col-md-12">
    <br>
    <div class="card">

     <!-- for success message -->
      <h3 class="text-center text-success mt-2"> {{ Session::get('message') }} </h3> 
      <form action="{{ route('newBlog') }}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group">
          <label class="control-label col-md-3">Category Name :</label>
          <div class="col-md-9">
            <select name="" class="form-control">
              @foreach($categories as $category)
              <option value=""> {{ $category->category_name}} </option>
              @endforeach
            </select>
            <!-- <input type="text" name="category_name" class="form-control" /> -->
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3">Blog Title :</label>
          <div class="col-md-9">
            <input type="text" name="blog_title" class="form-control" />
          </div>
        </div>
      <div class="form-group">
        <label class="control-label col-md-3">Blog Short Description :</label>
        <div class="col-md-9">
          <textarea name="blog_short_description" class="form-control" id="" cols="30" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Blog Long Description :</label>
        <div class="col-md-9">
          <textarea name="blog_long_description" class="form-control" id="editor" cols="30" rows="3"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Image :</label>
        <div class="col-md-9">
        <input type="file" name="blog_image" accept="image/*" class="form-control" />
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Publications Status :</label>
        <div class="col-md-9 radio">
          <label> <input type="radio" name="publication_status" value="1"> Published </label>
          <label> <input type="radio" name="publication_status" value="0"> Unpublished </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-9">
          <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Blog Info">
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection