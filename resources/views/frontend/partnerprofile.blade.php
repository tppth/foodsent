@extends('frontendtemplate')

@section('content')
<!-- partnerprofile -->
<div class="w-100 py-5">
	<div class="container py-5">
		<hr>
		<ul class="nav nav-tabs text-dark" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active shadow" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link shadow" id="function-tab" data-toggle="tab" href="#function" role="tab" aria-controls="function" aria-selected="false">Functions</a>
			</li>
			<li class="nav-item">
				<a class="nav-link shadow" id="items-tab" data-toggle="tab" href="#items" role="tab" aria-controls="items" aria-selected="false">Item List</a>
			</li>
			<li class="nav-item">
				<a class="nav-link shadow" id="manage-tab" data-toggle="tab" href="#manage" role="tab" aria-controls="manage" aria-selected="false">Manage Account</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="card shadow py-5 px-5 border-top-0">
					<form action="#" method="POST">
						<div class="form-group">
							<label class="font-weight-bold">Name</label>
							<input type="text" name="name" class="form-control" value="" readonly>
						</label>
					</div>
					<div class="form-group">
						<label class="font-weight-bold">Email</label>
						<input type="email" name="email" class="form-control" value="" readonly>
					</label>
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Address</label><textarea name="address" class="form-control" rows="4" readonly></textarea>
				</div>	
				<div class="form-group">
					<div class="row">
						<div class="col-4">
							<label class="font-weight-bold">Phone</label>
							<input type="text" name="phone" class="form-control" readonly>
						</div>
						<div class="col-8">
							<label class="font-weight-bold">City</label>
							<input type="text" name="homeno" class="form-control" readonly>
						</div>
					</div>

				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-danger float-right" name="submit" value="Delete">
					<input type="submit" class="btn btn-primary float-right mr-2" name="submit" value="Edit">
				</div>
			</form>
		</div>
	</div>
	<div class="tab-pane fade" id="manage" role="tabpanel" aria-labelledby="manage-tab">
		<div class="card shadow py-5 px-5 border-top-0">
			<form action="#" method="POST">
				<div class="form-group">
					<label class="font-weight-bold">Shop name</label>
					<input type="text" name="name" class="form-control" placeholder="KFC">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Shop email</label>
					<input type="email" name="email" class="form-control" placeholder="shopemail@domain.com">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password">
				</div>
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
					<label class="font-weight-bold">Address</label><textarea name="address" class="form-control" placeholder="R/5, Shwe Myint Zu St, Shwe Pone Nhyat Ave, Bayint Naung Rd" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label class="font-weight-bold">City</label>
					<input type="text" name="homeno" class="form-control" placeholder="Kamayut">
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-primary float-right">Be a partner</button>
				</div>
			</form>	
		</div>
	</div>
	<div class="tab-pane fade" id="function" role="tabpanel" aria-labelledby="function-tab">
		<div class="card shadow py-5 px-5 border-top-0">
			<h2 class="text-center">Add Items</h2>
			<div class="form-group">
				<a href="{{route('restaurantlist')}}" class="form-control btn btn-primary" name="restaurant">Restaurant</a>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="items" role="tabpanel" aria-labelledby="items-tab">
		<div class="card shadow py-5 px-5 border-top-0">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Item codes</th>
						<th>Item names</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>item001</td>
						<td>
							Pizza
						</td>
						<td>100,000 Ks</td>
						<td>
							<a href="#" class="btn btn-primary">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>items002</td>
						<td>
							Pizza
						</td>
						<td>100,000 Ks</td>
						<td>
							<a href="#" class="btn btn-primary">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>items003</td>
						<td>
							Pizza
						</td>
						<td>100,000 Ks</td>
						<td>
							<a href="#" class="btn btn-primary">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
@endsection