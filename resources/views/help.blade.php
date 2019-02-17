@extends('main')
@section('content')
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.blade.php"><i class="fa fa-home home_1"></i></a> / <span>Help</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Faq -->
	<div class="faq main-grid-border">
		<div class="container">
			<div class="wthree-help">
				<h3>He Can We help you</h3>
				<form action="#" method="get"> 
					<textarea placeholder="Your Query" name="Message" required=""></textarea>
					<input type="submit" value="submit">
				</form>
				<h5>OR</h5>
				<a href="contact">Contact Us</a>
			</div>
			<h2 class="w3-head">Frequently asked Questions</h2>
			<dl class="faq-list">
				<dt class="faq-list_h">

				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">How to post an advert on {{config('app.name')}} ?</h5>
				</dt>
				<dd>
					<h4 class="marker">A.</h4></dd><br/>
				<div class="m_13">
					<p>Posting ads on {{config('app.name')}} is easy and fast, just take the following steps to proceed:</p>

					<p>Click on <a href="postadform">Post FREE Ad  NOW</a></p>
					<p>Complete all the information about your item such as title, category, region, description, price and add photos (at least three photos needed for cars and phones)</p>
					<p>After filling out the required fields, click on “Post” button.</p>
					<p>Your advert will be published shortly once moderation process is completed.</p>
					<p>Once your advert is live, you will receive a notification email.</p>
					<p>Be ready to receive numerous incoming calls from your potential buyers. Good luck with your sales!</p>
				</div>
				</dd>

			<dl class="faq-list">
				<dt class="faq-list_h">

				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">Tips for creating an effective ad </h5>
				</dt>
				<dd>
					<h4 class="marker">A.</h4></dd><br/>
				<div class="m_13">

					If you really want to create a great ad, it is highly recommended to follow the instructions below: <br/>
					Use a clear title which includes the name of the item you sell. Try to make your title appealing and eye-catching.<br/>
					Set an appropriate price for your item so that the advert is approved. If the price is not relevant, it may be declined. Make sure to carry out some investigation of the prices for a particular item.<br/>
					The description of your product must be informative enough and mustn’t contain any false information regarding your product or service.<br/>
					Upload only unique and high-quality photos of your items taken by yourself and not downloaded from the Internet. The better photos you add, the more attractive your ad looks to the potential buyers and the more calls you receive.<br/>
					Indicate correct contact details for the potential buyers/clients to be able to reach you easily. Try to respond all the incoming calls or to call back your customers once available.<br/>
					Try to fill out all the fields of your profile page, as well as those of your advert, to let your customers dispose of all the necessary information about you as a seller and the products you sell.<br/>
					The better rating you have on our website, the more chances you get to attract a lot of buyers. Remember that it is important to build trust in your business. Your rating depends on the number of positive/negative feedback received from your previous customers.<br/>
					Make your advert as risk-free as possible. Underline that no prepayments are required and be ready to list those delivery services which presuppose payment on the delivery of the product ordered.<br/>
				</div>
				</dd>
          </dl>
			<dl class="faq-list">
				<dt class="faq-list_h">

				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">General safety tips</h5>
				</dt>
				<dd>
					<h4 class="marker">A.</h4></dd><br/>
				<div class="m_13">
					Meet Sellers in person <br/>
					Check out item's quality and make sure it meets your expectations before you make a payment <br/>

					Prepayments are strictly prohibited on Jiji <br/>
					Buyers - never pay before purchase! You can discuss the cost of delivery, but you can pay for the product only AFTER delivery is done. <br/>
					Sellers - don't ask for any prepayments before delivery! <br/>

					Use common sense <br/>
					Avoid anything that appears too good to be true, such as unrealistically low prices and promises of quick money. <br/>

					Never give out your financial information
					Including bank account details, eBay/PayPal info and any other information that could be misused <br/>

				</div>
				</dd>
          </dl>

		</div>	
	</div>
	<!-- // Faq -->
@endsection