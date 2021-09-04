@extends('admin.master');

@section('title')
Manage category
@endsection

<!-- manage category body -->
@section('categoryBody')
 <div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List of Category </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <h3 class="text-center text-success mt-2"> {{ Session::get('message') }} </h3> 
          <thead>
          <tr>
              <th>SL NO</th>
              <th>Category name</th>
              <th>Blog Title</th>
              <th>Blog Image</th>
              <th>Publications Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php($i = 1)
            @foreach($blogs as $blog)
            <tr>
              <th>{{ $i++ }}</th>
              <td>{{ $blog -> category_name }}</td>
              <td>{{ $blog -> blog_title }}</td>
              <td><img src="{{ asset($blog->blog_image)}}" height="100" width="120"></td>
              <td>{{ $blog -> publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
              <td>
                <!-- category id select -->
                <a href=" {{ route('editCategory',['id' =>  $blog -> id]) }} ">Edit</a> ||
                <!-- Delete data -->
                <a href="#" onclick="event.preventDefault(); document.getElementById('deleteCategoryForm').submit();">Delete</a>
                <form id="deleteCategoryForm" action=" {{ route('deleteCategory') }}" method="POST">
                  @csrf
                  <input type="hidden" value="{{ $blog -> id }}" name="id">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </div>

  @endsection