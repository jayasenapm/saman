@extends('master')


@section('content')
<div class="topimage">
  

</div>

<div class="container my-4">
<div class="hedd">
  <h3 class="text-center">Contact us</h3><br />
</div>


<div class="row">
  <div class="col-md-8">
      <form action="/post" method="post">
        <input class="form-control" name="name" placeholder="Name..." /><br />
        <input class="form-control" name="phone" placeholder="Phone..." /><br />
        <input class="form-control" name="email" placeholder="E-mail..." /><br />
        <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
        <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
      </form>
  </div>
  <div class="col-md-4 address">
    <b>Customer service:</b> <br />
    Phone: +94 773978000<br />
    E-mail: <a href="mailto:support@mysite.com">samanpriyadarshana126@gmail.com</a><br />
    <br /><br />
    <b>Ella Homestay:</b><br />
   
    Gotuwala<br />
    Ella<br />
    Phone: +94 077 39788000,71 2958000,72 2978000<br />
    <a href="samanpriyadarshana126@gmail.com">samanpriyadarshana126@gmail.com</a><br />


    <br /><br />
    <b>Pasindu Cab Service:</b><br />
    
    25/F.168 Queen<br />
   Gotuwela,Ella<br />
     Phone: +94 077 39788000,71 2958000,72 2978000<br />
    <a href="samanpriyadarshana126@gmail.com">samanpriyadarshana126@gmail.com</a><br />


  </div>
</div>
<div class="col-md-12">
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.843690152977!2d81.038592274657!3d6.86530892062021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae465955bc09a25%3A0xbdfadcdadec487fb!2sElla!5e0!3m2!1sen!2slk!4v1551313328193" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
</div>

@endsection