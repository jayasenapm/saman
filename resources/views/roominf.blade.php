@extends('master')


@section('content')
<div class="topimage">
  

</div>
<br>
<br>
<div class="container my-4">
	<div class="row">
	<div class="col-md-8 info ">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://visituva.lk/Hotel/1551099596IMG_20190225_121938.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/11.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/12.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/5.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/6.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/8.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/10.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</div>

		<div class="col-md-4 my-5">
			
            <div class="booking-form">
              <form>
                <div class="form-group">
                  <span class="form-label">Your Destination</span>
                  <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Check In</span>
                      <input class="form-control" type="date" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Check out</span>
                      <input class="form-control" type="date" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <span class="form-label">Rooms</span>
                      <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <span class="form-label">Adults</span>
                      <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <span class="form-label">Children</span>
                      <select class="form-control">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                </div>
                <div class="form-btn">
                  <button class="submit-btn">Check availability</button>
                </div>
              </form>
            </div>
         
		</div>
		<div class="col-md-8">
			
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit… Zril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur.

			
			<div class="roser" >
				<h2>ROOM SERVICES</h2>
			<div class="roomservice my-4">
				<span><i class="fas fa-wifi"></i></span>
				Wi-Fi
			</div>
			<div class="roomservice my-4">
				<span><i class="fa fa-bath" data-original-title="Sauna"></i></span>
				Sauna
			</div>
			<div class="roomservice my-4">
				<span><i class="fas fa-utensils"></i></i></span>
				 Breakfast
			</div>
			<div class="roomservice my-4">
				<span><i class="fa fa-female" data-original-title="Hair Dryer"></i></span>
				 Hair Dryer
			</div>
			<div class="roomservice my-4">
				<span><i class="fa fa-coffee" data-original-title="Coffee Maker"></i></span>
				 Coffee Maker
			</div>
			<div class="roomservice my-4">
				<span><i class="fas fa-tv"></i></i></span>
				 Widescreen TV
			</div>
			<div class="roomservice my-4">
				<span><i class="fas fa-crosshairs"></i></i></span>
				 Air Conditioner
			</div>
			<br>

			
		</div>
	</div>
		<div class="clearfix"></div>
		<div class="col-md-4">
			<div>
			<h3>ROOM REVIEWS</h3>
			<div class="reviwimg">
				<img src="https://eagle-themes.com/themes/zante/wp-content/uploads/2018/02/user2.jpg" width="50px" class="rounded">
			</div>
			<div class="comment">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
				<p>Mabel Hicks - Moscow, Russia</p>
				<p>Very good breakfast with great variety. The staff is amazing helped us and were extremely welcoming.</p>
			</div>
			<div class="reviwimg">
				<img src="https://eagle-themes.com/themes/zante/wp-content/uploads/2018/02/user1-1.jpg" width="50px" class="rounded">
			</div>
			<div class="comment">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
				<p>Mabel Hicks - Moscow, Russia</p>
				<p>Very good breakfast with great variety. The staff is amazing helped us and were extremely welcoming.</p>
			</div>
			<div class="reviwimg">
				<img src="https://eagle-themes.com/themes/zante/wp-content/uploads/2018/02/admin.jpg" width="50px" class="rounded">
			</div>
			<div class="comment">
				<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
				<p>Mabel Hicks - Moscow, Russia</p>
				<p>Very good breakfast with great variety. The staff is amazing helped us and were extremely welcoming.</p>
			</div>
			</div>


		</div>

			



			
	</div>
</div>

@endsection