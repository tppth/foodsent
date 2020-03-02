@extends('frontendtemplate')

@section('content')
<!-- partnerregister -->
<div class="w-100 py-5" style="background-image: url({{asset('frontend_file/images/beapartner_background.jpg')}});">
<div class="container">
	<div class="card shadow px-5 py-5">
		<div class="row">
			<div class="col-12">
				<p>
					<h3>Be a partner</h3>
					FoodSent is the new online ordering fast food portal for your customers to get all their favourite dishes at a click of a button which will allow your business to meet its full potential by joining FoodSent today using the latest technology, dedicated customer service and nationwide marketing. Foodsent is putting a smile on everyone's face.

					FoodSent noticed that third party portals are on the rise, charging huge amounts of comission to businesses so we took on the intiative to launch our own platform that all local businesses can benefit by offering 0% comission on all orders.
				</p>
			</div>
			<div class="col-12">
				<hr>
			</div>
			<div class="col-12">
				<form action="{{route('restaurantowners.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label class="font-weight-bold">Name</label>
						<input type="text" name="name" class="form-control" placeholder="KFC">
					</div>
					<div class="form-group">
						<label class="font-weight-bold">Email</label>
						<input type="email" name="email" class="form-control" placeholder="shopemail@domain.com">
					</div>
					<div class="form-group">
						<label class="font-weight-bold">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<!-- <div class="form-group">
						<label class="font-weight-bold">Confirm Password</label>
						<input type="password" name="c_password" class="form-control" placeholder="Confirm password">
					</div> -->
					<div class="form-group">
						<div class="row">
							<div class="col-1">
								<label class="font-weight-bold">Prefix</label>
								<input type="text" name="prefix" class="form-control" value="959" readonly>
							</div>
							<div class="col-2">
								<label class="font-weight-bold">Phone</label>
								<input type="text" name="phone" class="form-control" placeholder="768874756">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="font-weight-bold">Address</label><textarea name="address" class="form-control" placeholder="R/5, Shwe Myint Zu St, Shwe Pone Nhyat Ave, Bayint Naung Rd, Kamayut" rows="4"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary float-right">
							Be a partner
						</input>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection