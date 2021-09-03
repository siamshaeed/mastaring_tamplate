@extends('admin.master')

<!-- for title  -->
@section('title')
Add Category | Blog
@endsection

<!-- for body -->
@section('body')
<div class="row">
  <div class="col-md-12">
    <br>
    <div class="card">

     <!-- for success message -->
      <h3 class="text-center text-success mt-2"> {{ Session::get('message') }} </h3> 
      <form action="{{ route('updateCategory') }}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group">
          <label class="control-label col-md-3">Category Name :</label>
          <div class="col-md-9">
            <input type="text" name="category_name" class="form-control" value="{{ $categories->category_name }}"/>
            <input type="hidden" name="id" class="form-control" value="{{ $categories->id }}"/>
          </div>
        </div>
      <div class="form-group">
        <label class="control-label col-md-3">Category Descriptions :</label>
        <div class="col-md-9">
          <textarea name="category_description" class="form-control"   cols="30" rows="3">{{ $categories-> category_description}}</textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Publications Status :</label>
        <div class="col-md-9 radio">
          <label> <input type="radio" name="publication_status" {{$categories->publication_status == 1 ? 'checked' : ''}} value="1"> Published </label>
          <label> <input type="radio" name="publication_status" {{$categories->publication_status == 0 ? 'checked' : ''}} value="0"> Unpublished </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-9">
          <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info">
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection