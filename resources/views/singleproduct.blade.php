@extends('main')

@section('content')
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="/"><i class="fa fa-home home_1"></i></a> /
			<a href="/{{$product->category->slug}}">{{$product->category->name}}</a> /
			<span>{{$product->title}}</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2>{{$product->title}}</h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i><a >{{\App\State::find($product->state)->name}}</a>, <a >{{$product->lga}}</a>| Added at {{$product->created_at}}, Ad ID: {{$product->id}}</p>
					<div class="flexslider">
						<ul class="slides">
							@foreach($images as $image)
							<li data-thumb="{{asset("uploads/$image")}}">
								<img src="{{asset("uploads/$image")}}" />
							</li>
								@endforeach
						</ul>
					</div>
					<!-- FlexSlider -->
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

					<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						<h4><span class="w3layouts-agileinfo">Title </span> : <a>{{$product->title}}</a><div class="clearfix"></div></h4>
						<h4><span class="w3layouts-agileinfo">Description</span> :<p>{{$product->description}}</p><div class="clearfix"></div></h4>
						<h4><span class="w3layouts-agileinfo">Price </span> : <strong>{{$product->price}}</strong> ,
							@if($product->negotiable)
								but its Negotiable
								@endif </h4>
						<h4><span class="w3layouts-agileinfo">Phone </span> : {{$product->phone}}</h4>
						<h4><span class="w3layouts-agileinfo">Email </span> : {{$product->email}}</h4>
						<h4><span class="w3layouts-agileinfo">Condition </span> : {{ucfirst($product->condition)}}</h4>
						<h4><span class="w3layouts-agileinfo">Item Type </span> : {{$product->category->name}}</h4>
						<h4><span class="w3layouts-agileinfo">Seller </span> : @if($product->user_id) {{$product->user->name}} @else {{$product->name}} @endif</h4>

					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Price</p>
							<h3 class="rate">{{$product->price}}</h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Condition</p>
							<h4>{{ucfirst($product->condition)}}</h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Item Type</p>
							<h4>{{$product->category->name}}</h4>
							<div class="clearfix"></div>
						</div>
						@if($product->negotiable)
						<div class="itemtype">
							<p class="p-price">Item is</p>

							<h4>Negotiable</h4>
							<div class="clearfix"></div>
						</div>
						@endif
						@if($product->user_id)
						<div class="condition">
							<p class="p-price">Seller</p>
							<a href="{{route('viewseller', $product->user->slug)}}"><h4>{{$product->user->name}}</h4></a>
							<div class="clearfix"></div>
						</div>
						@else
						<div class="condition">
							<p class="p-price">Seller</p>
							<h4>{{$product->name}}</h4>
							<div class="clearfix"></div>
						</div>
							@endif
					</div>
					<div class="interested text-center">
						<h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
						<p><i class="glyphicon glyphicon-earphone"></i>{{$product->phone}}</p>
					</div>
						<div class="tips">
						<h4>Safety Tips for Buyers</h4>
							<ol>
								<li><a>Do not pay in advance even for the delivery.</a></li>
								<li><a >Try to meet at a safe, public location.</a></li>
								<li><a >Check the item BEFORE you buy it.</a></li>
								<li><a >Pay only after collecting the item.</a></li>
							</ol>
						</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<br/><br/><br/>
		<div class="container">
			<div class="agileinfo-ads-display col-md-7">
				<div class="wrapper">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div>
									<div id="container">
										<div class="view-controls-list" id="viewcontrols">
											<label>Similar ads</label>
										</div>

										<div class="clearfix"></div>
										<ul class="list">
											@foreach($similarproducts as $similarproduct)
												@if($similarproduct->id == $product->id)
													@continue
												@endif
												<a href="{{route('viewproduct', ['cat' => $similarproduct->category->slug, 'slug' => $similarproduct->slug])}}/">
													<li>
														<img src="{{asset('uploads/'.(explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $similarproduct->filename)))))[0])}}" title="" alt="" />
														<section class="list-left">
															<h5 class="title">{{$similarproduct->title}}</h5>
															<span class="adprice">{{$similarproduct->price}}</span>
															<p class="catpath">{{$similarproduct->category->name}}</p>
														</section>
														<section class="list-right">
															<span class="date">{{$similarproduct->created_at->diffForHumans()}}</span>
															<span class="cityname">{{$similarproduct->lga}}</span>
														</section>
														<div class="clearfix"></div>
													</li>
												</a>
											@endforeach
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--//single-page-->
@endsection