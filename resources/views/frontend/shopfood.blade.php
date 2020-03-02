@extends('frontendtemplate')

@section('content')
<div class="w-100 py-3">
	<div class="container px-5">
		<hr class="w-75">
		<div class="float-right">
			<a href="{{route('shoplist')}}" class="btn btn-primary">< 	Shops</a>
		</div>
		<div class="container px-5 py-5">
			<h2>KFC</h2>
			<table class="table table-hover">
				<thead>
					<tr class="text-center">
						<th>No</th>
						<th>Food name</th>
						<th>Food photo</th>
						<th>Food type</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">1</td>
						<td class="text-center">KFC</td>
						<td class="text-center">
							<img src="{{asset('frontend_file/images/logo.png')}}" width="100" height="100" class="img-fluid">
						</td>
						<td>
							<ul style="list-style: none;">
								<li>Breakfast</li>
								<li>Lunch</li>
								<li>Dinner</li>
							</ul>
						</td>
						<td class="text-right">
							10,000 Ks
						</td>
						<td class="text-center">
							<a href="#" class="btn btn-primary">Add to cart</a>
						</td>
					</tr>
				</div>
				<tr>
					<td class="text-center">1</td>
					<td class="text-center">
						KFC
					</td>
					<td class="text-center">
						<img src="{{asset('frontend_file/images/logo.png')}}" width="100" height="100" class="img-fluid">
					</td>
					<td>
						<ul style="list-style: none;">
							<li>Breakfast</li>
							<li>Lunch</li>
							<li>Dinner</li>
						</ul>
					</td>
					<td class="text-right">
						10,000 Ks
					</td>
					<td class="text-center">
						<a href="#" class="btn btn-primary">Add to cart</a>
					</td>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<td class="text-center">KFC</td>
					<td class="text-center">
						<img src="{{asset('frontend_file/images/logo.png')}}" width="100" height="100" class="img-fluid">
					</td>
					<td>
						<ul style="list-style: none;">
							<li>Breakfast</li>
							<li>Lunch</li>
							<li>Dinner</li>
						</ul>
					</td>
					<td class="text-right">
						10,000 Ks
					</td>
					<td class="text-center">
						<a href="#" class="btn btn-primary">Add to cart</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection