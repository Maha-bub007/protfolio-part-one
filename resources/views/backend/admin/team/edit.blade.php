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
      <h3 class="card-title">Edit New Member</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('/admin/team/update/'.$teamedit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Member Name</label>
          <input type="text" class="form-control" value="{{$teamedit->name}}" id="name" name="name" placeholder="Enter name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Member Qualification</label>
            <input type="text" class="form-control" id="name" value="{{$teamedit->Qualification}}" name="Qualification" placeholder="Enter Qualification" required>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Member Description</label>
          <input type="text" class="form-control" id="service" name="Desc" value="{{$teamedit->Desc}}" placeholder="Enter About Description" required>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Member Photo</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image" accept="image/*">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            
          </div>
          <img class="mt-3 rounded border border-primary" src="{{asset('backend/image/ourteam/'.$teamedit->image)}}" height="70px" width="100px" >
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