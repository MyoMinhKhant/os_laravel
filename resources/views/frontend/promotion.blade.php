@extends('frontend/master')
@section('content')
<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Promotion Item </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">


		<div class="row">
            <div class="col">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title"> Discount </h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="icofont-rounded-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="icofont-rounded-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">   @foreach($items as $item)
					    <div class="owl-item">

					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					            <div class="pad15">
					            	<a href="{{route('itemdetailpage',$item->id)}}">
					        		<img src="{{asset($item->photo)}}" class="img-fluid">
					            	<p class="text-truncate">{{$item->name}}</p>
					            	<p class="item-price">
					            		<strike>{{$item->price}}ks</strike> 
					            		<span class="d-block">{{$item->price}}ks</span>
					            	</p>
					            	  </a>

					                <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>

									<a href="#" class="addtocartBtn text-decoration-none" data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-photo="{{$item->photo}}">Add to Cart</a>
					        	</div>
					        	
					        	   
					        </div>
					        
					    </div>
					    @endforeach



					</div>
                </div>
            </div>
        </div>

	</div>




@endsection
@section('script')
	<script type="text/javascript" src="{{asset('frontend/js/main.js')}}">
		
	</script>
	@endsection