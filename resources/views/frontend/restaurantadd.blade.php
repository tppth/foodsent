@extends('frontendtemplate')

@section('content') 
<!-- register -->
<div class="w-100" style="background-image: url('{{asset('frontend_file/images/restaurantadd.jpeg')}}');">
	<div class="container px-5 py-5">
		<div class="card shadow px-5 py-5">
			<form action="" method="POST">
				@csrf
				<h2 class="text-center pb-4">Restaurant Add</h2>
				<div class="form-group">
					<label class="font-weight-bold">Restaurant Name</label>
					<input type="text" name="fullname" class="form-control" placeholder="Jon Doe">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Email</label>
					<input type="email" name="email" class="form-control" placeholder="email@domain.com">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Phone</label>
					<input type="password" name="password" class="form-control" placeholder="Password">
				</div>
				<!-- <div class="form-group">
					<label class="font-weight-bold">Confirm password</label>
					<input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password">
				</div> -->
				<div class="form-group">
					<div class="row">
						<div class="col-2">
							<label class="font-weight-bold">Prefix</label>
							<input type="text" name="prefix" class="form-control" value="959" readonly>
						</div>
						<div class="col-10">
							<label class="font-weight-bold">Phone</label>
							<input type="text" name="phone" class="form-control" placeholder="768874756">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Address</label>
					<textarea name="address" class="form-control" placeholder="R/5, Shwe Myint Zu St, Shwe Pone Nhyat Ave, Bayint Naung Rd, Kamayut" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label class="font-weight-bold">City</label>
					<select name="city" class="form-control">
						@foreach($cities as $city)
						<option value="{{$city->id}}">{{$city->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Opening Duration</label>
					<input type="text" name="openingduration" class="form-control" placeholder="9 to 5">
				</div>
				<hr>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary float-right">Sign Up</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection