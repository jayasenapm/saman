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
      <img class="d-block w-100 kenburns-top" src="http://a1travels.lk/wp/wp-content/uploads/2018/09/dunhinda-1.jpg" alt="First slide">
     <div class="carousel-caption d-none d-md-block tracking-in-contract-bck">
    <h1 >Best location and view in Ella</h1>
    <p>Enjoy your holiday in x hotel </p>
  </div>


    </div>
    <div class="carousel-item">
      <img class="d-block w-100 kenburns-top" src="images/9.jpg" alt="Second slide">
     <div class="carousel-caption d-none d-md-block tracking-in-contract-bck">
    <h1>Modern and luxury room</h1>
    <p>Enjoy your holiday in x hotel </p>
  </div>



    </div>
    <div class="carousel-item">
      <img class="d-block w-100 kenburns-top" src="images/8.jpg" alt="Third slide">
     <div class="carousel-caption d-none d-md-block tracking-in-contract-bck">
    <h1>Book your room now</h1>
    <p>Enjoy your holiday in x hotel </p>
  </div>


    </div>
    <div class="carousel-item">
      <img class="d-block w-100 kenburns-top" src="https://upload.wikimedia.org/wikipedia/commons/f/f8/Dunhinda.jpg" alt="Third slide">
     <div class="carousel-caption d-none d-md-block tracking-in-contract-bck">
    <h1>Book your room now</h1>
    <p>Enjoy your holiday in x hotel </p>
  </div>


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

<!--booking-form -->

<div class="container">
  <div class="row">
<div class="col-md-12 col-sm-12 my-4 ">
            <div class="booking-form">
              <form class="form-inline">
                <div class="form-group">
                  <span class="form-label">Your Destination</span>
                  <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
                </div>
               
                  
                    <div class="form-group">
                      <span class="form-label">Check In</span>
                      <input class="form-control" type="date" required>
                    </div>
                 
                  
                    <div class="form-group">
                      <span class="form-label">Check out</span>
                      <input class="form-control" type="date" required>
                    </div>
                 
                
                
                  
                    <div class="form-group">
                      <span class="form-label">Rooms</span>
                      <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                 
                 
                  
                 
                 <div class="form-group">
                
                <div class="form-btn">
                  <button class="submit-btn">Check </button>
                </div>
                  </div>
              </form>
            </div>
          </div>
</div>
</div>
<!--booking-form end -->


<!--room section start from here -->

<div class="container my-4">
	
<div class="row">

	<div class="col-md-12 col-sm-12 ">
    <h1 class="text-center welcome">WELCOME TO ELLA HOMESTAY</h1>

    <p class="text-justify">Ella Homestay a popular Ella homestay/ guests with luxury rooms. The property also provides free Wi-Fi. The property is located at the Ella city centre and is in close proximity to the  Nine Arches Bridge, Little Adam’s Peak and the famous Ella Rock.

Rooms are tastefully furnished with air conditioners, flat-screen TVs with satellite channels, tea / coffee making facility, safety deposit box and a minifridge. All bathrooms are with free toiletries and hot/cold water.

At Oak Ray Ella Gap Hotel, the hotel offers free parking. Guests can choose from both buffet and a la carte at their in-house restaurant. A variety of cocktails, wines and beers can be enjoyed at the bar. Cookery classes / demonstrations can be arranged for guests as well..</p>
		<h1 class="text-center">OUR FAVORITE ROOMS</h1>
		
	</div>


	<div class="col-md-4 col-sm-12 rooms ">
	<div class="card" style="width: 100%;">
  <img class="card-img-top" src="https://visituva.lk/Hotel/1551099596IMG_20190225_121938.jpg" alt="Card image cap">
  
</div>
</div>
<div class="col-md-4 col-sm-12 rooms ">
	<div class="card" style="width: 100%;">
  <img class="card-img-top" src="https://visituva.lk/Hotel/1551099611IMG_20190225_121918.jpg" alt="Card image cap">
  
</div>
</div>
<div class="col-md-4 col-sm-12 rooms ">
	<div class="card" style="width: 100%;">
  <img class="card-img-top" src="images/13.jpg" alt="Card image cap">
 
</div>

</div>
</div>	

<div class="row restaurant my-4">
	<div class="col-md-12 col-sm-12">
		<h1 class="text-center">OUR AWESOME SERVICES</h1>
		<p class="text-justify"> After the most enriching train ride you are now in for a rewarding stay at one of the finest venues in beautiful Ella. Ella Homestay is blessed with view handpicked by nature her self. </p>
	</div>
  <div class="col-md-4 col-sm-4 ">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><h4><span><i class="fas fa-utensils"></i></span>Sri lankan food</h4>
        we preparing western and sri lankan food 
      </a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><h4><span><i class="fas fa-cheeseburger"></i>Room service</span></h4>
     we provide best service  
   </a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><h4><span><i class="fas fa-cheeseburger"></i> Accommodation</span></h4>we provide hot water bathroom and air condition rooms
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><h4><span><i class="fas fa-cheeseburger"></i> Arrange transport</span></h4></a>
    </div>
  </div>
  <div class="col-md-8 col-sm-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane tt fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      	<img src="http://www.magazine.elitehavens.com/wp-content/uploads/2015/11/sri-lankan-spread-at-speakeasy.jpg" width="100%">
      </div>
      <div class="tab-pane tt fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <img src="https://widgety-assets.s3.amazonaws.com/2016/06/25/17/55/45/640/celebrity_cruises_celebrity_silhouette_room_service.jpg" width="100%">
  		</div>
      <div class="tab-pane tt fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
     <img src="https://s3-production.bobvila.com/articles/wp-content/uploads/2016/11/No_Hot_Water_in_Shower.jpg" width="100%">
  		</div>
      <div class="tab-pane tt fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI1ukU-fpPIhyEQ1o5LOh40TFqF7Tx6NshpjaTkyM3XY78podGaQ" width="100%">
  		</div>
    </div>
  </div>
</div>
	
</div>

<!--room section end here -->

<!--cab service  -->
	<div class="col-md-12 parlex my-4">
		<div class="row">
			<div class="col-md-6">
        <div class="roundimage">
			  <img src="{{ URL::asset('images/car.png') }}" width="100%">
        </div>
         <div class="roundimage">
       <img src="{{ URL::asset('images/van.png') }}" width="100%">
        </div>
		</div>
		<div class="col-md-6">
			<h2 class="text-center">PASINDU</h2>
      <h4 class="text-center">Cabs Service</h4>
			<div class="cab heartbeat" >
        <h1 class="text-center" >RENT AT THE</h1> 
        <h1 class="text-center">LOWEST PRICES</h1> 
        <h2 class="text-center">CALL - +94 77 3978000 / +94 71 2958000 </h2>  
      </div>
		</div>

		</div>
		
	</div>
  <!--cab service end -->
  <!--loation -->
<div class="container my-4">
<div class="row">
  <div class="col-md-12" >
    <h1 class="text-center">PLACES OF INTERESTS</h1>
    <p class="text-justify">Ella is a beautiful small hillside town nestled in the southern edge of Sri Lanka’s Hill Country. Famed for its mountainous beauty, scenic landscapes, lush green valleys, fertile tea plantations, mesmerising views and plenty of fresh mountain air, Ella has an unspoilt beauty of a sleepy countryside admired by many..</p>
  </div>
  <div class="col-md-3 plase ">
    
    <div class="card my-4">
      <a href="https://visituva.lk/Detail.php?dname=Dhowa%20Raja%20Maha%20Viharaya&Dis=Ella" target="_blank">
    <img class="card-img-top" src="https://visituva.lk/uploads/Ella%20Gap1.jpg" alt="Card image cap">
      </a>
  </div>

  </div>
 <div class="col-md-6 plase">
    
    <div class="card my-4">
       <a href="https://visituva.lk/Detail.php?dname=Dhowa%20Raja%20Maha%20Viharaya&Dis=Ella" target="_blank">
    <img class="card-img-top" src="https://visituva.lk/uploads/Dova%20Temple2.jpg" alt="Card image cap">
      </a>
  </div>
  </div>
   <div class="col-md-3 plase">
    
    <div class="card my-4">
       <a href="https://visituva.lk/Detail.php?dname=Little%20Adam%E2%80%99s%20Peak&Dis=Ella" target="_blank">
    <img class="card-img-top" src="https://visituva.lk/uploads/1542611356adms3.jpg" alt="Card image cap">
        </a>
  </div>
  </div>
   <div class="col-md-3 plase">
    
    <div class="card my-4">
       <a href="https://visituva.lk/Detail.php?dname=Demodara%20Nine%20Arch%20Bridge&Dis=Ella" target="_blank">
    <img class="card-img-top" src="https://visituva.lk/uploads/1541733637ninearch6.jpg" alt="Card image cap">
      </a>
  </div>
  </div>

 <div class="col-md-3 plase">
    
    <div class="card my-4">
       <a href="https://visituva.lk/Detail.php?dname=FACTORY&Dis=Ella" target="_blank">
    <img class="card-img-top" src="https://visituva.lk/uploads/newfac.jpg" alt="Card image cap">
      </a>
  </div>
  </div>
   <div class="col-md-3 plase">
    
    <div class="card my-4">
      <a href="https://visituva.lk/Detail.php?dname=Rawana%20Falls&Dis=Ella" target="_blank">
    <img class="card-img-top" src="https://visituva.lk/uploads/1541759579rawanafall2.jpg" alt="Card image cap">
    </a>
  </div>
  </div>
   <div class="col-md-3 plase">
    
    <div class="card my-4">
      <a href="https://visituva.lk/Detail.php?dname=Rawana%20Cave&Dis=Ella" target="_blank">
    <img class="card-img-top" src="https://visituva.lk/uploads/1542612673rvanacve1.jpg" alt="Card image cap">
   </a>
  </div>
  </div>
</div>
</div>	
<!--endloation -->
<div class='scrolltop'>
    <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
</div>
<script type="text/javascript">
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})
</script>


<!--Containt end -->
@endsection