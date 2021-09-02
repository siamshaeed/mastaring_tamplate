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
      <form action="{{ route('new-category') }}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group">
          <label class="control-label col-md-3">Category Name :</label>
          <div class="col-md-9">
            <input type="text" name="category_name" class="form-control" />
          </div>
        </div>
      <div class="form-group">
        <label class="control-label col-md-3">Category Descriptions :</label>
        <div class="col-md-9">
          <textarea name="category_description" class="form-control" id="" cols="30" rows="3"></textarea>
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
          <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info">
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection