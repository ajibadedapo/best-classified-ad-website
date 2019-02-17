@extends('main')

@section('content')
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.blade.php"><i class="fa fa-home home_1"></i></a> / <span>Post your Ad</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="w3-head">Post an Ad</h2>
			<div class="post-ad-form col-md-12" >
				<form id="" action="/product" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<label>Select Category <span>*</span></label>
					<select class="" name="category_id" required>
						@foreach($cats as $cats)
					  <option value="{{$cats->id}}">{{$cats->name}}</option>
							@endforeach
					</select>
					<div class="clearfix"></div>
					<label>Select Condition <span>*</span></label>
					<select class="" name="condition" required>
					  <option value="used">Used</option>
					  <option value="new">New</option>
					</select>
					<div class="clearfix"></div>
					<label>Ad Title <span>*</span></label>
					<input type="text" required class="phone" maxlength="70" name="title" placeholder="">
					<div class="clearfix"></div>
					<label>Ad Description <span>*</span></label>
					<textarea class="mess" required name="description"  maxlength="4000" placeholder="Write few lines about your product"></textarea>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">
				<label>Photos for your ad :</label>	
					<div class="photos-upload-view">

							<div class="input-group control-group increment" >
								<input type="file" required name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>

							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

					{{--	<div id="messages">
						<p>Status Messages</p>
						</div>--}}
						</div>
					<div class="clearfix"></div>
{{--
						<script src="{{asset('js/filedrag.js')}}"></script>
--}}
				</div>
					<div class="personal-details">
						@if(Auth::guest())
						<label>Your Name <span>*</span></label>
						<input type="text" name="name"  class="name" required placeholder="">
						@endif
						<div class="clearfix"></div>
						<label>Your Mobile No <span>*</span></label>
						<input type="text" class="phone" required name="phone" placeholder="">
						<div class="clearfix"></div>
						<label>Price <span>*</span></label>
						<input type="text" class="phone" required name="price" placeholder="">
						<div class="clearfix"></div>
						<label>Negotiable <span></span></label>
						<input type="checkbox" class="phone" required name="negotiable" placeholder="">
						<div class="clearfix"></div>
						<label>Your Email Address<span>*</span></label>
						<input type="text" class="email" required name="email" placeholder="">
                        <div class="clearfix"></div>
						<label>State<span>*</span></label>
                        <select id="state" required name="state">
                        </select>
                        <div class="clearfix"></div>
						<label>Local Government<span>*</span></label>
                        <select required id="local" name="lga">
                        </select>
                        <div class="clearfix"></div>

						<p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.html" target="_blank">Terms of Use </a> and <a href="privacy.html" target="_blank">Privacy Policy</a></p>
					<input type="submit" value="Post">
					<div class="clearfix"></div>
					</div>

				</form>
			</div>
		</div>
	</div>
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
	<!-- // Submit Ad -->




@endsection