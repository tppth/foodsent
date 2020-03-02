<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_file/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_file/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend_file/css/custom.css')}}">
	<script type="text/javascript" src="{{asset('frontend_file/js/jquery.min.js')}}"></script>
</head>
<body>
	<div class="w-100 bg-light">
	<!-- navbar -->
	<div class="container" id="top">
		<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
			<a class="navbar-brand" href="{{route('main')}}">
				<img src="{{asset('frontend_file/images/logo.png')}}" width="100" height="100">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto text-uppercase font-weight-bold">
					<li class="nav-item">
						<a href="{{route('cart')}}" class="nav-link">
							Cart
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('beapartner')}}">Be a partner</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn btn-primary text-white font-weight-bold" href="#" data-toggle="modal" data-target="#login">Login</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
	@yield('content')
	<div class="w-100 bg-light">
		<!-- linkpages -->
		<div class="container px-5 py-5" style="min-height: 50vh;">
			<div class="px-0 pt-5 pb-4">
				<div class="row">
					<div class="col-4 text-center">
						<h3><u>Customer Services</u></h3>
						<p><a href="{{route('aboutus')}}">About Us</a></p> 
						<p><a href="{{route('contactus')}}">Contact Us</a></p> 
						<p><a href="">Feedback Us</a></p> 
					</div>
					<div class="col-4 text-center">
						<h3><u>Restaurant Names</u></h3>
						<p><a href="">K.F.C</a></p> 
						<p><a href="">Lotteria</a></p> 
						<p><a href="">Marry Brown</a></p> 
					</div>
					<div class="col-4 text-center">
						<h3><u>Social Connect</u></h3>
						<i class="fab fa-facebook fa-3x"></i>
						<i class="fab fa-instagram fa-3x"></i> 
						<i class="fab fa-twitter fa-3x"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<footer class="text-center py-3">
				&copy; Copyrighted. All right reserved to FoodSent.
			</footer>
		</div>	
	</div>
		<!-- up -->
		<div class="container-fluid text-right mb-3" style="bottom: 0; position: fixed;">
			<a href="#top" class="nav-link text-dark"><i class="fas fa-arrow-circle-up fa-2x"></i></a>
		</div>
	<script type="text/javascript" src="{{asset('frontend_file/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend_file/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend_file/fontawesome/js/all.min.js')}}"></script>
</body>
<!-- LOGINMODAL -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-uppercase" id="exampleModalLabel">Log In</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="POST">
					<div class="form-group">
						<label class="font-weight-bold">Email</label>
						<input type="email" name="email" class="form-control" placeholder="email@domain.com">
					</div>
					<div class="form-group">
						<label class="font-weight-bold">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<a href="">Reset Password?</a>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-primary w-100">Log In</button>
					</div>
					<div class="form-group">
						<a href="{{route('register')}}" class="btn btn-success w-100">Register</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</html>