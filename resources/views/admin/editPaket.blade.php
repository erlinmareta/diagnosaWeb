<x-app-layout>
    
    
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
                <h1 class="m-0">Starter Page</h1>
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
    
        <!-- Main content -->
        <div class="content">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h3>Edit data Paket</h3>
              </div>
  
            <div class="card-body">
              <form action="{{ route('updatePaket', $data) }}" method="post">
              @csrf
              @method('put')
                <div class="form-group">
                      <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Paket" value="{{ old('nama',$data->nama)  }}">
                  </div>
                  <div class="form-group">
                    <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga Paket" value="{{ old('harga', $data->harga) }}">
                </div>
                <div class="form-group">
                  <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan Paket"  >{{ $data->keterangan }}</textarea><br>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Ubah Data</button>
              </div>
              </form>
              

            </div>
  
          </div>
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    
      
    
      <!-- Main Footer -->
      <footer class="main-footer">
        @include('template.footer')
      </footer>
    </div>
    
    <!-- ./wrapper -->
    
    <!-- REQUIRED SCRIPTS -->
    
    @include('template.script')
    </body>
    </html>
    
    </x-app-layout>



