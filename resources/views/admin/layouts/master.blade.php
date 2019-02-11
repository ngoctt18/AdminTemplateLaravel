<!DOCTYPE html>
<html>
<head>
  @include('admin.partials.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- header -->
    @include('admin.partials.header')

    <!-- sidebar -->
    @include('admin.partials.sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          @yield('title')
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">@yield('title')</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('admin.partials.footer')
    <!-- /.footer -->


    @include('admin.partials.control_sidebar')
    <!-- Control Sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- ./scripts -->
  @include('admin.partials.script')
</body>
</html>
