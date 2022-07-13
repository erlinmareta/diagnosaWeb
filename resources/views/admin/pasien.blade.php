


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">


<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper">

    <x-app-layout>
        <x-slot name="header">

        </x-slot>

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA PASIEN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="card card-info card-outline">
          <div class="card-header">
            <div class="card-tools">
              <a href="" class="btn btn-success">Tambah data Pasien<i class="fas fa-plus-square"></i></a>

            </div>

          </div>

          <div class="card-body">
            <table class="table table-sm table-bordered table-striped">
              <tr>
                <th>Username</th>
                <th>No.HP</th>
                <th>Detail Pasien</th>
                <th>Hasil MCU</th>
                <th>Aksi</th>
              </tr>

              @foreach ($dtuser as $user)
              @if ($user->usertype == '0')

              <tr>

                <td>{{ $user->name }}</td>
                <td>{{ $user->hp }}</td>
                <td>
                  <a href="{{ url('admin.detailPasien')."/".$user->id }}" class="btn btn-primary">lihat</a>
                </td>
                <td>
                  <a href="" class="btn btn-primary">kirim</a>
                </td>
                <td>
                  <a href="">
                    <i class="fas fa-edit"></i>|
                  </a>
                  <a href="">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>

              </tr>
              @endif
              @endforeach
            {{-- <tr>
              <td>
                  <a href="">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href=""></a>
                   <i class="fas fa-trash"></i>
                </td>

              </tr>  --}}



            </table>
          </div>

        </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('template.footer')
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('template.script')
</body>
</html>


</x-app-layout>
