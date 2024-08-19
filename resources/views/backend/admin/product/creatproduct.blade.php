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
      <h3 class="card-title">Add New Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/admin/product/store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <input type="text" class="form-control" id="price" name="price" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
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