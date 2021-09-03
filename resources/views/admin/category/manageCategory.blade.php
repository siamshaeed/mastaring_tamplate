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
              <th>Id</th>
              <th>Category name</th>
              <th>Category description</th>
              <th>publication status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Category name</th>
              <th>Category description</th>
              <th>publication status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @php($i = 1)
            @foreach($categories as $category)
            <tr>
              <th>{{ $i++ }}</th>
              <td>{{ $category -> category_name }}</td>
              <td>{{ $category -> category_description }}</td>
              <td>{{ $category -> publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
              <td>
                <!-- category id select -->
                <a href=" {{ route('editCategory',['id' =>  $category -> id]) }} ">Edit</a> ||
                <a href=" {{ route('deleteCategory',['id' =>  $category -> id]) }}">Delete</a>
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