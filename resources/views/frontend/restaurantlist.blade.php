@extends('frontendtemplate')

@section('content')
<!-- partnerprofile -->
<div class="w-100 py-5">
	<div class="container px5 py-5">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Names</th>
					<th>Categories</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>KFC</td>
					<td>
						<ul style="list-style: none;">
							<li>Breakfast</li>
							<li>Lunch</li>
							<li>Dinner</li>
							<li>Dessert</li>
						</ul>
					</td>
					<td>
						<a href="{{route('foodadd')}}" class="btn btn-primary">
							Add
						</a>
						<a href="{{route('restaurantedit')}}" class="btn btn-success">
							Edit
						</a>
						<a href="#" class="btn btn-danger">
							Delete
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection