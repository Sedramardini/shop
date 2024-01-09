<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('admin.layout.head')
  <!-- Navbar -->
@include('admin.layout.main_header')
  <!-- /.navbar -->
@include('admin.layout.main_sidebar')
  <!-- Main Sidebar Container -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('title_page')</h1>
            </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>/.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
  <div class="container-fluid">
      <div class="card">
           <!-- Main content -->

    @yield('content')

    <!-- here -->
    <!-- /.content -->
      </div>

</div>
</section>
</div>

  
  </div>
  <!-- /.content-wrapper -->
 @include('admin.layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.layout.footer_scripts')
</body>
</html>
