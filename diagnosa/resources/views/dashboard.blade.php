
 {{-- <x-app-layout> --}}
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.98.0">
        <title>homepage</title>
    
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    
        
    
        
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/carosel.css" rel="stylesheet">
    <link href="../css/carosel.rtl.css" rel="stylesheet">
    
        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }
    
          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
    
          .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
          }
    
          .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
          }
    
          .bi {
            vertical-align: -.125em;
            fill: currentColor;
          }
    
          .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
          }
    
          .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
          }
        </style>
    
        
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
      </head>
      <body>

       
            
        
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Carousel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    
    <main>
    
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <svg  class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect style="background-image: url(images/bg02.png)" width="100%" height="100%" fill="#3CB371"/></svg>
    
            <div class="container" >
              <div class="carousel-caption text-start" >
                <h3>Diagnosa Laboratorium Klinik</h3>
                <p>Jl. Raya Karangampel Gg. V Selatan Kecamatan Karangampel Kabupaten Indramayu Jawa Barat Indonesia</p>
                <p>cgiciadivahdivhab</p>
                <p>bvgdhhdvcy mdhddhbsg</p>
                <p>bcdvgtdtussxh cbch</p>
                <p><a href="#"></a></p>
              </div>
            </div>
        </div>
        <br>
        <br>
    
    
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
    
      <div class="container marketing">
    
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            {{-- <svg class="bd-placeholder-img rounded-circle"   width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> --}}
    
            <h2 class="fw-normal">Hemat</h2>
            <p>Asam Urat, Cholesterol, Cholesterol Total, Gula Darah Sewaktu, Hematologi, Trigliserida, Cek Urin </p>
            <p>Rp 212.500</p>
            <p><a  class="btn btn-secondary" href="{{ url('user.form') }}">Pesan &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> --}}
    
            <h2 class="fw-normal">Cholesterol</h2>
            <p>Cholesterol, Cholesterol Total, HDL Cholesterol, LDL Cholesterol, Rasio Cholesterol Total dan LDL, Trigliserida</p>
            <p>Rp 180.000</p>
            <p><a class="btn btn-secondary" href="#">pesan &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> --}}
    
            <h2 class="fw-normal">Perak</h2>
            <p>Cholesterol Total, Creatimin, Gula Darah Puasa, Hematologi Lengkap, Urin lengkap, Rontgen Thorax, SGOT, SGPT, Trigliserida</p>
            <p>Rp 180.000</p>
            <p><a class="btn btn-secondary" href="#">Pesan &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
        <!-- START THE FEATURETTES -->
    
        
    
        <!-- /END THE FEATURETTES -->
    
      </div><!-- /.container -->
    
    
      <!-- FOOTER -->
      
    </main>
    
    
        <script src="../js/bootstrap.bundle.min.js"></script>
    
          
{{-- </x-app-layout> --}}
      </body>
    </html>
    

