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
				<a class="nav-link shadow" id="orderhistory-tab" data-toggle="tab" href="#orderhistory" role="tab" aria-controls="orderhistory" aria-selected="false">Order history</a>
			</li>
			<li class="nav-item">
				<a class="nav-link shadow" id="manage-tab" data-toggle="tab" href="#manage" role="tab" aria-controls="manage" aria-selected="false">Manage</a>
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
	<div class="tab-pane fade" id="orderhistory" role="tabpanel" aria-labelledby="orderhistory-tab">
		<div class="card shadow py-5 px-5 border-top-0">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Order no</th>
						<th>Items</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>order001</td>
						<td>
							<li>Pizza</li>
							<li>Pizza</li>
							<li>Pizza</li>
						</td>
						<td>100,000 Ks</td>
					</tr>
					<tr>
						<td>2</td>
						<td>order002</td>
						<td>
							<li>Pizza</li>
							<li>Pizza</li>
							<li>Pizza</li>
						</td>
						<td>100,000 Ks</td>
					</tr>
					<tr>
						<td>3</td>
						<td>order003</td>
						<td>
							<li>Pizza</li>
							<li>Pizza</li>
							<li>Pizza</li>
						</td>
						<td>100,000 Ks</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3" class="text-right">Total</td>
						<td>300,000 Ks</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<div class="tab-pane fade" id="manage" role="tabpanel" aria-labelledby="manage-tab">
		<div class="card shadow py-5 px-5 border-top-0">
			<form action="" method="POST">
				<div class="form-group">
					<label class="font-weight-bold">Full name</label>
					<input type="text" name="fullname" class="form-control" value="Jon Doe">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Email</label>
					<input type="email" name="email" class="form-control" value="email@domain.com">
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Password</label>
					<input type="password" name="password" class="form-control" value="Password">
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-lg-1 col-md-2">
							<label class="font-weight-bold">Prefix</label>
							<input type="text" name="prefix" class="form-control" value="959" readonly>
						</div>
						<div class="col-lg-11 col-md-10">
							<label class="font-weight-bold">Phone</label>
							<input type="text" name="phone" class="form-control" value="768874756">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="font-weight-bold">Address</label>
					<textarea name="address" class="form-control" value	="R/5, Shwe Myint Zu St, Shwe Pone Nhyat Ave, Bayint Naung Rd" rows="4"></textarea>
				</div>
				<hr>
				<div class="form-group">
					<button type="button" class="btn btn-success float-right">Update</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
</div>
@endsection