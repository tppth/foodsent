@extends('frontendtemplate')

@section('content')
<!-- contactus -->
<div class="w-100">
	<div class="container px-5 py-5">
		<div class="row px-5 py-5">
			<div class="col-lg-4">
				<div class="card shadow pl-0 pr-5 py-3" style="min-height: 20vh;">
					<ul style="list-style: none;">
						<h4>Address</h4>
						<li class="float-left">R/5, Shwe Myint Zu St, Bayint Naung Rd, Kamayut, Yangon</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card shadow pl-0 py-3" style="min-height: 20vh;">
					<ul style="list-style: none;">
						<h4>Phone no</h4>
						<li class="float-left">+959768874756</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card shadow pl-0 py-3" style="min-height: 20vh;">
					<ul style="list-style: none;">
						<h4>Email address</h4>
						<li class="float-left">thetpaingphyo.tpp@gmail.com</li>
					</ul>
				</div>
			</div>
			<div class="col-6 pt-3">
				<form action="#" method="POST">
				<div class="form-group">
					<label class="font-weight-bold">Username</label>
					<input type="text" class="form-control" name="name" placeholder="Jon Doe">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Email</label>
					<input type="email" class="form-control" name="email" placeholder="email@domain.com">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Subject</label>
					<input type="text" class="form-control" name="subject" placeholder="Subject">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Message</label>
					<textarea class="form-control" placeholder="Message..." rows="4"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary w-100" name="" value="Send">
				</div>
				</form>
			</div>	
			<div class="col-6 pt-5">
				<div class="card embed-responsive embed-responsive-16by9 px-0 mx-0 py-0 my-0">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854515.8762309896!2d93.89289394715139!3d19.361545192327906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1953fc49fb755%3A0x45b19605a43c3143!2sMyanmar%20IT%20Consulting!5e0!3m2!1sen!2suk!4v1580373212384!5m2!1sen!2suk" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
						<div class="card-body py-5 px-3"></div>
				</div>
			</div>
		</div>
		<hr class="w-100">
	</div>
</div>
@endsection