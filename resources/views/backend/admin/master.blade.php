<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('backend.admin.includs.style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

        <!-- Navbar -->
        @include('backend.admin.includs.hader')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.admin.includs.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('backendContant')
        </div>
       
        <!-- /.content-wrapper -->
        @include('backend.admin.includs.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('backend.admin.includs.script')
    @stack('script')
</body>

</html>
