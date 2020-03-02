@extends('frontendtemplate')

@section('content')
<!-- banner -->
<div style="min-height: 80vh; background-image: url('{{asset('frontend_file/images/fruit_banner.jpg')}}'); background-size: cover;">
	<div class="container w-50 py-5 px-5">
		<div class="card shadow px-2 py-2 mx-auto w-50 bg-transparent" style="margin-top: 30%;">
			<h4 class="text-center">Search City</h4>
			<div class="form-group">
				<input type="text" class="form-control" name="searchcity" placeholder="Kamayut">
			</div>
			<div class="form-group">
				<a href="{{route('shoplist')}}" class="btn btn-primary w-100 form-control">Search</a>
			</div>
		</div>
	</div>
</div>
<!-- tutorial -->
<div class="w-100">
	<div class="container px-5 py-5" style="min-height: 50vh;">
		<h2 class="text-center">
			Order Steps<hr>
		</h2>
		<div class="card shadow px-5 pt-5 pb-4">
			<div class="row text-center" style="font-size: 1em;">
				<div class="col-3">
					<i class="fas fa-map-marker-alt fa-3x"></i>
					<p class="mt-3">Locate the city</p>
				</div>
				<div class="col-3">
					<i class="fas fa-store fa-3x"></i>
					<p class="mt-3">Choose the restaurant</p>
				</div>
				<div class="col-3">
					<i class="fas fa-truck-moving fa-3x"></i>
					<p class="mt-3">Wait for it to be delievered</p>
				</div>
				<div class="col-3">
					<i class="fas fa-utensils fa-3x"></i>
					<p class="mt-3">Enjoy, after you have paid</p>
				</div>
			</div>
		</div>
		<div class="px-0 pt-5 pb-4">
			<h2 class="text-center">
				Promotion<hr>
			</h2>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="{{asset('frontend_file/images/banner.gif')}}" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="{{asset('frontend_file/images/banner.gif')}}" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="{{asset('frontend_file/images/banner.gif')}}" class="d-block w-100" alt="...">
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
	</div>
</div>
@endsection