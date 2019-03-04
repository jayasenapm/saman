@extends('master')


@section('content')
<div class="topimage">
  

</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 roomss my-4">
			<div class="leftpart">
				<img src="https://visituva.lk/Hotel/1551099596IMG_20190225_121938.jpg" width="100%">
			</div>
			<div class="midpart">
				<h3> Room No 1</h3>
				<p>large rooms with three beds</p>
				
			</div>
			<div class="rightpart">
				<h3>Rs 3000.00</h3>
				<p>PER NIGHT</p>
				<a href="{{ URL('/info') }}">MOR DETAILS</a>
				
			</div>
		</div>

			<div class="col-md-12 roomss my-4">
			<div class="leftpart">
				<img src="images/8.jpg" width="100%">
			</div>
			<div class="midpart">
				<h3> Room No 2</h3>
				<p>large rooms with three beds</p>
				
			</div>
			<div class="rightpart">
				<h3>Rs 3000.00</h3>
				<p>PER NIGHT</p>
				<a href="">MOR DETAILS</a>
				
			</div>
		</div>

		
	</div>
</div>

@endsection