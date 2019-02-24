<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/my.js') }}"></script>

    
  </head>
  <body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="{{ URL('/') }}">HOME</a>
  <a href="{{ URL('/rooms') }}">ROOMS</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<div class="logo">
  <img src="{{ URL::asset('images/logo.png') }}" width="100px">
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

    
  @yield('content')

     
  		



  	
   <!--footer -->
   <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h1>Hotel</h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.

Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut ali</p>
        </div>
         <div class="col-md-4 col-sm-12">
          <h1>Importen Link</h1>
        </div>
         <div class="col-md-4 col-sm-12">
          <h1>Contact Us</h1>
        </div>
      </div>
    </div>
   </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
  </body>
</html>