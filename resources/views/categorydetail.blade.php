@extends('main')

@section('content')

	@if($category)
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="/"><i class="fa fa-home home_1"></i></a> /
			<a href="">Categories</a> /
			<span>{{$category->name}}</span></span>
		</div>
	</div>
	@endif
	@if(isset($alllistings))
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="/"><i class="fa fa-home home_1"></i></a> /
			<span>All Listings</span></span>
		</div>
	</div>
	@endif
	<!-- //breadcrumbs -->
	<!-- Electronic appliances -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
				<form method="get" action="{{route('localsearch')}}">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your State to see local ads</label>
						<select  id="state" name="state">
			            </select>
				</div>
				<div class="browse-category ads-list">
					<label>Select your Local Government</label>
					<select class=" show-tick" id="local" name="lga" data-live-search="true">
					</select>
				</div>
				<div class="search-product ads-list">
					<label>Search for a specific product</label>
					<div class="search">
						<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class="form-control input-lg" @if(isset($searchquery)) value="{{$searchquery}}" @endif name="searchquery" placeholder="Phone" />
							<span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</div>
					</div>
					</div>
				</div>
				<div class="clearfix"></div>
				</form>
			</div>
			<div class="ads-grid">
				@include('partials.sidebar')
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
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select id="sort" @change="onChange">
														<option value="recent" >Most recent</option>
														<option value="l2h"  @if (isset($_GET['sort']))   @if ($_GET['sort']=='l2h') selected @endif @endif>Price: Rs Low to High</option>
														<option value="h2l" @if (isset($_GET['sort']))@if ($_GET['sort']=='h2l') selected @endif @endif>Price: Rs High to Low</option>
										</select>
									   </div>
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
						<ul class="pagination pagination-sm">
							{!! $products->render() !!}
						</ul>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js" type="text/javascript"></script>

	<script>
		const app = new Vue({
			el: ".sort",
			data: function() {
				return {
					message: "Vue"
				}
			},
			methods: {
				onChange(event) {
					var sortval = (event.target.value);
					var currentUrl = (window.location.href).replace('sort=l2h', '').replace('sort=h2l', '').replace('sort=recent', '');
					@if((Route::currentRouteName()=='categorysearch')||(Route::currentRouteName()=='localsearch'))
							var divider = '&';
							@else
						var divider = '?';

					@endif
					var nextUrl = currentUrl+ divider +'sort='+sortval;
					console.log(nextUrl);

					window.location.href = nextUrl;
				}
			}
		})
	</script>
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
	<script>
		@if(isset($_GET['state']))
		var stateval = '';
		$("#state option[value='{{$_GET['state']}}']").attr("selected", true);
		@endif

		@if(isset($_GET['lga']))
		var lga = '';

		$("#local option[value='{{$_GET['lga']}}']").attr("selected", true);
		@endif
	</script>
@endsection

@endsection
