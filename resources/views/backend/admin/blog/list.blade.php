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
                            <th>Blog Name</th>
                            <th>Blog Date </th>
                            <th>Blog Description </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Bloglist as $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->name}} </td>
                            <td>{{$data->date}} </td>
                            <td>{{$data->desc}} </td>
                            <td><img src="{{asset('backend/image/blog/'.$data->image)}}" height="100px" width="150px" ></td>
                            
                            
                            <td>
                                <a href="{{url('/admin/Blog/edit/'.$data->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                                <a href="{{url('/admin/Blog/delete/'.$data->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
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