@extends('frontendtemplate')

@section('content')
<div class="w-100 py-3">
	<div class="container px-5">
		<table class="table table-hover">
			<thead>
				<tr class="text-center">
					<th>No</th>
					<th>Food name</th>
					<th>Food photo</th>
					<th>Food type</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center">1</td>
					<td class="text-center">Chicken Rice</td>
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
					<td class="text-center">
						<a href="#" class="border border-0 px-2 btn">+</a>
						<span class="border-0">1</span>
						<a href="#" class="border border-0 px-2 btn">-</a>
					</td>
					<td class="text-right">
						10,000 Ks
					</td>
					<td class="text-right">
						10,000 Ks
					</td>
				</tr>
			</tbody>
		</table>
		<div class="form-group">
			<select class="form-control">
				<option>
					Cash Only
				</option>
			</select>
		</div>	
		<div class="form-group">
			<a href="#" class="form-control btn btn-success" onclick="return confirm('Order has been made!')">
				Order
			</a>
		</div>
	</div>
</div>
@endsection