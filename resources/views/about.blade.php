@extends('main')
@section('content')

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.blade.php"><i class="fa fa-home home_1"></i></a> / <span>About</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- contact -->
	<div class="contact main-grid-border">
		<!-- address --><br/>
		<!-- address --><br/>
		<!-- address --><br/>
		<!-- address --><br/>
		<div class="container">
			<div class="agileits-get-us">
				<ul>
					<li style="width: 97%;">
						About {{config('app.name')}}
						{{config('app.name')}} is fast-growing Nigerian free online classifieds with advanced security system.

						We provide a simple hassle-free solution to sell and buy almost anything.

						As a Seller you can:

						Post Ads with images;
						Update, move your ad to Top position to get maximum efficiency from selling;
						Get calls and messages only from real people, because we require every user to register.
						As a Buyer you can:

						Buy anything, simply call or send message to the Seller and agree purchase with Sellers directly;
						Write a review after a deal is closed.
						We are highly focused on security and able to resolve any issues in short terms.
						A Buyer may leave review after an agreement with a Seller to buy.
						A Buyer may report problems with an ad and we will check the Seller.</li>
		{{--			<li><i class="fa fa-phone" aria-hidden="true"></i>  +033 111 222 4567</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>--}}
				</ul>
			</div>
		</div>
		<!-- //address -->
		<div class="map-w3layouts">
			<h3>Location</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant'Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen=""></iframe>
		</div>
	</div>

	<!-- // contact -->
@endsection