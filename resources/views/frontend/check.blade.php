@extends('frontend/master')
 @section('content')
<div class="container">
	<h2 class="text-center">Your Cart</h2>
	<table class="table table-bordered my-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Photo</th>
				<th>Name</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Total</th>

			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	<a href="{{route('frontend.shoppingcart')}}" class="btn btn-success">Continue Shopping</a>
	<textarea class="notes" placeholder="Your Notes Here!"></textarea>
	<a href="#" class="btn btn-info float-right buy_now">Checkout</a>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/fakemain.js')}}"></script>
@endsection