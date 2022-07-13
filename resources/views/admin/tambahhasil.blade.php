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
            {{-- @include('template.navbar') --}}
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
                                <h1 class="m-0">TAMBAH DATA HASIL</h1>
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

                <div class="card-body">
                    <form action="{{ route('storehasil') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group input-group-sm mb-3">
                            <label for="pasien" class="input-group-text">Data Pasien</label>
                            <select name="pasien" id="pasien">
                                <option value="">Pilih Pasien</option>

                                @foreach($pasien as $p)
                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea name="hasil" id="hasil" class="form-control"
                                placeholder="Hasil Medical Checkup"></textarea><br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                    </form>

                </div>


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
