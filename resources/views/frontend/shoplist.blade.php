@extends('frontendtemplate')

@section('content')
<div class="w-100 py-3">
	<div class="container px-5">
		<div class="container py-5">
			<div class="row">
				<div class="col-lg-12">
					<!-- Filter -->
					<div class="row pb-5">
						<div class="col-3">
					<!-- <div class="form-group">
						<select class="form-control">
							<option>Breakfast</option>
							<option>Lunch</option>
							<option>Dinner</option>
						</select>
					</div> -->
				</div>
				<div class="col-3">
					<!-- <div class="form-group">
						<a href="#" class="btn btn-primary">Filter</a>
					</div> -->
				</div>
				<div class="col-3">
					<input type="text" class="form-control" name="findrestaurant" placeholder="Restaurant">
				</div>
				<div class="col-3">
					<a href="#" class="btn btn-primary">Search</a>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-12">
					<div class="card px-3 py-3 mb-4 shadow">
						<a href="{{route('shopfood')}}" style="text-decoration: none;" class="text-dark">
							<div class="row">
								<div class="col-2">
									<img src="{{asset('frontend_file/images/logo.png')}}" class="img-fluid">
								</div>
								<div class="col-7">
									<p>
										<ul style="list-style: none;">
											<span class="font-weight-bold" style="font-size: 1.5em;">KFC</span>
											<li>Breakfast</li>
											<li>Lunch</li>
											<li>Dinner</li>
											<li>Working hours: 24 hrs</li>
										</ul>
									</p>
								</div>
								<div class="col-3">
									<p>
										<ul style="list-style: none;">
											<span class="font-weight-bold" style="font-size: 1.5em;">Close Order!</span>
											<li>Estimated time : 45 mins</li>
										</ul>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="card px-3 py-3 mb-4 shadow">
						<a href="#" style="text-decoration: none;" class="text-dark">
							<div class="row">
								<div class="col-2">
									<img src="{{asset('frontend_file/images/logo.png')}}" class="img-fluid">
								</div>
								<div class="col-7">
									<p>
										<ul style="list-style: none;">
											<span class="font-weight-bold" style="font-size: 1.5em;">KFC</span>
											<li>Breakfast</li>
											<li>Lunch</li>
											<li>Dinner</li>
											<li>Working hours: 24 hrs</li>
										</ul>
									</p>
								</div>
								<div class="col-3">
									<p>
										<ul style="list-style: none;">
											<span class="font-weight-bold" style="font-size: 1.5em;">Close Order!</span>
											<li>Estimated time : 45 mins</li>
										</ul>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="card px-3 py-3 mb-4 shadow">
						<a href="#" style="text-decoration: none;" class="text-dark">
							<div class="row">
								<div class="col-2">
									<img src="{{asset('frontend_file/images/logo.png')}}" class="img-fluid">
								</div>
								<div class="col-7">
									<p>
										<ul style="list-style: none;">
											<span class="font-weight-bold" style="font-size: 1.5em;">KFC</span>
											<li>Breakfast</li>
											<li>Lunch</li>
											<li>Dinner</li>
											<li>Working hours: 24 hrs</li>
										</ul>
									</p>
								</div>
								<div class="col-3">
									<p>
										<ul style="list-style: none;">
											<span class="font-weight-bold" style="font-size: 1.5em;">Close Order!</span>
											<li>Estimated time : 45 mins</li>
										</ul>
									</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@endsection