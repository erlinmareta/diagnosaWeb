<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
    More Templates Visit ==> Free-Template.co
    -->
    <title>Beranda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="Free-Template.co" />
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    

    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item">
           

        </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="is-preload">
			

      <!-- Header -->
        <header id="header">
          <h1>DIAGNOSA</h1>
                  <h3>Laboratorium Klinik</h3>
                  <p>Jl. Raya Barat Gg Selatan Karangampel - Indramayu</p>
        </header>
  
      <!-- Signup Form -->
        <!-- <form id="signup-form" method="post" action="#">
          <input type="email" name="email" id="email" placeholder="Masukkan Email" />
                  <input type="password" name="password" id="password" placeholder="Masukkan Password" />
          <input type="submit" value="Log In" />
        </form> -->
       
        
        @if (Route::has('login'))
                
        @auth

        <x-app-layout>

        </x-app-layout>

        @else
            <button type="button"> <a class="nav-link" href="{{ route('login') }}" >Log in</a> </button>

            @if (Route::has('register'))
            <button type="button"> <a class="nav-link" href="{{ route('register') }}" >Register</a> </button>
            @endif
        @endauth
   
@endif
        </div>
      <!-- Footer -->
        <footer id="footer">
          <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
          </ul>
          <ul class="copyright">
                      <li>&copy; Untitled.</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
          </ul>
        </footer>
  
      <!-- Scripts -->
        <script src="assets/js/main.js"></script>
      </div> 

      {{-- @if(session()->has('message'))

      <div class="alert alert-succsess">

      <button type="button" class="close" data-dismiss="alert">x</button>

      {{session()->get('message')}}

  </div>
      @endif --}}

      
   
   
   
   
    </section>
 
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

  </body>
</html>