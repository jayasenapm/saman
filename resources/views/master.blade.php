<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ella Homestay</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >
    <script type="text/javascript" src="{{ URL::asset('js/my.js') }}"></script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css?family=Bangers|Merienda" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <!-- Start Bootstrap Carousel HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <link rel="stylesheet" href="{{ URL::asset('css/fluid-gallery.css') }}" />
  </head>
  <body>
    <a href="#" id="scroll" style="display: none;"><span></span></a>

  <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="{{ URL('/') }}">HOME</a>
  <a href="{{ URL('/rooms') }}">ROOMS</a>
  <a href="{{ URL('/gallery') }}">GALLERY</a>
  <a href="{{ URL('/cab') }}">FIND CAB</a>
  <a href="{{ URL('/contact') }}">CONTACT</a>
  </div>
  <div class="logo">
  <h1>ELLA HOMESTAY</h1>
  </div>

    <div class="top">
    <span><i class="fas fa-phone"></i></span>+94 77 3978000
    <span><i class="fas fa-envelope"></i></span>samanpriyadarshana126@gmail.com
      
    </div>
    

<div id="main">
  
  <button class="openbtn" onclick="openNav()">☰</button>  
 
</div>




<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Mega Menu</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Category 1</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
    </div>
  </div> 
</div>




  @yield('content')

  <!-- Footer -->
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Quick links</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="{{ URL('/') }}"><i class="fa fa-angle-double-right"></i>Home</a></li>
            <li><a href="{{ URL('/rooms') }}"><i class="fa fa-angle-double-right"></i>Rooms</a></li>
            <li><a href="{{ URL('/gallery') }}"><i class="fa fa-angle-double-right"></i>Gallery</a></li>
            <li><a href="{{ URL('/cab') }}"><i class="fa fa-angle-double-right"></i>Find Cab</a></li>
            <li><a href="{{ URL('/contact') }}"><i class="fa fa-angle-double-right"></i>Contact</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Address</h5>
        <b>Ella Homestay:</b><br />
   
    Gotuwala<br />
    Ella<br />
    Phone: +94 077 39788000,71 2958000,72 2978000<br />
    <a href="samanpriyadarshana126@gmail.com">samanpriyadarshana126@gmail.com</a><br />
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Pasindu Cabs</h5>
        <b>Pasindu Cab Service:</b><br />
    
    25/F.168 Queen<br />
   Gotuwela,Ella<br />
     Phone: +94 077 39788000,71 2958000,72 2978000<br />
    <a href="samanpriyadarshana126@gmail.com">samanpriyadarshana126@gmail.com</a><br />
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-youtube"></i></a></li>
            
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
       
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->   
  		



  	
  
  
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
  </body>
</html>