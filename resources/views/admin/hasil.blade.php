<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">


<head>
    @include('template.head')
</head>

<body class="hold-transition sidebar-mini">
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
                                <h1 class="m-0">Data Hasil Medical Checkup</h1>
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
                                <a href="{{ route('createhasil') }}" class="btn btn-success">Tambah data<i
                                        class="fas fa-plus-square"></i></a>

                            </div>

                        </div>

                        <div class="card-body">
                            <table class="table table-sm table-bordered table-striped">
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>alamat</th>
                                    <th>No. Hp</th>
                                    <th>BB</th>
                                    <th>TB</th>
                                    <th>Paket</th>
                                    <th>Hasil</th>
                                    <th>File</th>
                                    <th>aksi</th>

                                </tr>
                                @foreach ($dtHasil as $detail)
                                <tr>
                                    <td>{{ $detail->name }}</td>
                                    <td>{{ $detail->alamat }}</td>
                                    <td>{{ $detail->hp }}</td>
                                    <td>{{ $detail->bb }}</td>
                                    <td>{{ $detail->tb }}</td>
                                    <td>{{ $detail->nama }}</td>
                                    @if ($detail->kirim == 0)
                                    <td>
                                        <a href="{{ route('admin.kirim',$detail->id_mcu) }}"
                                            class="btn btn-primary">kirim</a>
                                    </td>

                                    @else
                                    <td>
                                        Sudah Terkirim
                                    </td>

                                    @endif
                                    <td>
                                        <a href="{{ route('cetakmcu',$detail->idpasien) }}" class="btn btn-primary">File</a>
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
                                @endforeach


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
