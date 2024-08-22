@extends('backend.admin.master')
@section('backendContant')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Add New Blog</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/admin/Blog/store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">blog Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Blog Date</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="Enter Date" required>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Blog Description</label>
          <input type="text" class="form-control" id="service" name="desc" placeholder="Enter About Description" required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Blog Photo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image" accept="image/*">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
        </div>
      </div>
    </div>
</section>

@endsection