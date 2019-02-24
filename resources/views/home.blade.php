@extends('master')


@section('content')

<!--Caruuse start from here -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.pexels.com/photos/583846/pexels-photo-583846.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/908284/pexels-photo-908284.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/270360/pexels-photo-270360.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Caruuse end -->
<!--Containt start from here -->
<div class="container">
	
<div class="row">

	<div class="col-md-12 col-sm-12">
		<h1>OUR FAVORITE ROOMS</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
	</div>


	<div class="col-md-4 col-sm-12 rooms ">
	<div class="card" style="width: 100%;">
  <img class="card-img-top" src="https://eagle-themes.com/templates/zante/images/rooms/single-room.jpg" alt="Card image cap">
  
</div>
</div>
<div class="col-md-4 col-sm-12 rooms ">
	<div class="card" style="width: 100%;">
  <img class="card-img-top" src="https://eagle-themes.com/templates/zante/images/rooms/single-room.jpg" alt="Card image cap">
  
</div>
</div>
<div class="col-md-4 col-sm-12 rooms ">
	<div class="card" style="width: 100%;">
  <img class="card-img-top" src="https://eagle-themes.com/templates/zante/images/rooms/single-room.jpg" alt="Card image cap">
 
</div>
khkk
</div>
</div>	

<div class="row">
	<div class="col-md-12 col-sm-12">
		<h1>OUR AWESOME SERVICES</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
	</div>
  <div class="col-md-4 col-sm-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-md-8 col-sm-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      	<img src="https://eagle-themes.com/templates/zante/images/spa.jpg" width="100%">
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <img src="https://eagle-themes.com/templates/zante/images/swimming.jpg" width="100%">
  		</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
     <img src="https://eagle-themes.com/templates/zante/images/restaurant.jpg" width="100%">
  		</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <img src="https://eagle-themes.com/templates/zante/images/conference.jpg" width="100%">
  		</div>
    </div>
  </div>
</div>
	
</div>
	<div class="col-md-12 parlex">
		<div class="row">
			<div class="col-md-6">
			 <img src="{{ URL::asset('images/logo.png') }}" width="50%">
		</div>
		<div class="col-md-6">
			<h2>ZAKYNTHOS - ZANTE</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. 

Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
		</div>

		</div>
		
	</div>

	




<!--Containt end -->
@endsection