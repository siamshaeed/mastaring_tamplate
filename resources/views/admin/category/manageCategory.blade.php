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
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
            @foreach($categories as $category)
            <tr>
              <th>1</th>
              <td>{{ $category -> category_name }}</td>
              <td>{{ $category -> category_description }}</td>
              <td>{{ $category -> publication_status }}</td>
              <td>
                <a href="">Edit</a> | <a href="">Delete</a>
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