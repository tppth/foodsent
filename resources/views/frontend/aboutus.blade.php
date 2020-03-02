@extends('frontendtemplate')

@section('content')
<!-- aboutus -->
<div class="w-100 py-5" style="background-image: url({{asset('frontend_file/images/beapartner_background.jpg')}});">
<div class="container px-5 py-5">
	<div class="card shadow px-5 py-5">
		<p>
			<h4 class="text-uppercase">About Us</h4>
			<br>	
			FoodSent is an online portal with a wide selection of takeaways in your local area. Whether you fancy pizza, kebab, curry, noodles or fish & chips; for lunch, dinner or as a desert, we have you covered. 
			<br><br>
			Our customers save on average $45,000 every week on their takeaways when using FoodSent. 
			<br><br>
			How? <br><br>
			Unlike otherfood portals, we don't charge any service fee on orders. No service charge, as well as exculsive discounts and great offers from our takeaway partners, mean that you'll be saving money compared to rival food portals.
			<br><br>
			Our long list of take away partners is constantly growing due to our policy of not charging a comission for orders made through FoodSent. Not only are you supporting your local takeaways by using FoodSent, you're benefitting from the exculsive discount they can afford to offer by not paying comission to our rivals. 
			<br><br>
			We are committed to giving our customers a great experience. We regularly run competitions and prize draws exclusive for customers and we're known to push out a cheeky discount code from time to time.
			<br><br>
			<img src="{{asset('frontend_file/images/logo.png')}}" width="100" height="100" class="ml-auto">
		</p>
	</div>
</div>
</div>
@endsection