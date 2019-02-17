@extends('main')

@section('content')
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="/"><i class="fa fa-home home_1"></i></a> /
			<a href="">Profile</a> /
			<span>{{$user->name}}</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Electronic appliances -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="ads-grid">
				<div class="side-bar col-md-3">
				<div class="w3ls-featured-ads">
					<h2 class="sear-head fer">{{$user->name}}</h2>
					<div class="w3l-featured-ad">
						<a>
							<div class="w3-featured-ad-left">
								<img src="https://ui-avatars.com/api/?name={{$user->name}}" title="ad seller image" alt="" />
							</div>

							<div class="clearfix"></div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					 {{-- <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Ads</span>
						  </a>
						</li>
					  </ul>--}}
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
{{--
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
--}}
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="clearfix"></div>
							<ul class="list">
								@if(isset($catsearch))
									Showing {{$searchquery}} in Nigeria
									@elseif(isset($locationsearch))
									Showing {{$searchquery}} in {{$_GET['lga']}}, {{\App\State::find($_GET['state'])->name}}, Nigeria
									@endif
								@foreach($products as $product)
								<a href="{{route('viewproduct', ['cat' => $product->category->slug, 'slug' => $product->slug])}}/">
									<li>
									<img src="{{asset('uploads/'.(explode(',', str_replace(']', '', str_replace('[', '', str_replace('"', '', $product->filename)))))[0])}}" title="" alt="" />
									<section class="list-left">
									<h5 class="title">{{$product->title}}</h5>
									<span class="adprice">{{$product->price}}</span>
									<p class="catpath">{{$product->category->name}}</p>
									</section>
									<section class="list-right">
									<span class="date">{{$product->created_at->diffForHumans()}}</span>
									<span class="cityname">{{$product->lga}}</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
									@endforeach
							</ul>
						</div>
							</div>
						</div>
{{--
						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
--}}
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Electronic appliances -->

@section('extrajs')
	<script type="text/javascript">

		$(document).ready(function() {

			$(".btn-success").click(function(){
				if( $( "input:file" ).length<5)
				{
					var html = $(".clone").html();
					$(".increment").after(html);
				}
			});

			$("body").on("click",".btn-danger",function(){
				$(this).parents(".control-group").remove();
			});

		});

	</script>

	<script src="{{asset('js/selectng.js')}}" type="text/javascript">
	</script>
@endsection

@endsection
