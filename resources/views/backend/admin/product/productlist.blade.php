@extends('backend.admin.master')
@section('backendContant')
    <div class="wrapper">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->name}} </td>
                            <td><img src="{{asset('backend/image/product/'.$data->image)}}" height="100px" width="150px" ></td>
                            <td> {{$data->price}}</td>
                            
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="{{url('/admin/product/delete/'.$data->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
