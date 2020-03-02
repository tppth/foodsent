@extends('frontendtemplate')

@section('content')
<div class="container px-5 py-5">
	<h2>Shopping Cart</h2>
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
				<th>Action</th>
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
				<td class="text-center">
					<a href="#" class="btn btn-danger">
						Delete
					</a>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2">
					<a href="{{route('shopfood')}}" class="btn btn-primary">Continue Shopping</a>
				</td>
				<th colspan="4" class="text-right">
					Total
				</th>
				<td class="text-right">
					100,000 Ks
				</td>
				<td class="text-center">
					<a href="{{route('checkout')}}" class="btn btn-primary">Check out</a>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
@endsection