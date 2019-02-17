@extends('main')
@section('content')

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.blade.php"><i class="fa fa-home home_1"></i></a> / <span>Feedback</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Feedback -->
	<div class="feedback main-grid-border">
		<div class="container">
			<h2 class="w3-head">Feedback</h2>
			<div class="feed-back">
				<h3>Tell us what you think of us</h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				<div class="feed-back-form">
					<form>
					<span>User Details</span>
							<input type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}">
							<input type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<input type="text" value="Phone No" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone No';}">
							<span>Is there anything you would like to tell us?</span>
							<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="submit">
						</form>
				</div>
			</div>
		</div>	
	</div>
	<!-- // Feedback -->
@endsection