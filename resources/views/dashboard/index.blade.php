<!DOCTYPE html>
<html lang="en">
@include('dashboard.layouts.tags.styles')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('dashboard.layouts.includes.navbar')
    <!-- Main Sidebar Container -->
    @include('dashboard.layouts.includes.sidebar')
    <!-- Content Wrapper. Contains page content -->
   @yield('content')
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('dashboard.layouts.tags.scripts')

</body>
</html>
