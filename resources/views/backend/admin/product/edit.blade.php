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
      <h3 class="card-title">Edit Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/admin/product/update/'.$productEdit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="text" class="form-control" value="{{$productEdit->name}}" id="name" name="name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <input type="text" class="form-control" id="price" value="{{$productEdit->price}}" name="price" placeholder="Enter prices" required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image" accept="image/*">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
          
            
          </div>
          <img class="mt-3 rounded border border-primary" src="{{asset('backend/image/product/'.$productEdit->image)}}" height="70px" width="100px" >
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Update</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
        </div>
      </div>
    </div>
</section>
@endsection