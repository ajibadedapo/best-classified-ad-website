@extends('main')
@section('content')

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.blade.php"><i class="fa fa-home home_1"></i></a> / <span>Contact</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- contact -->
	<div class="contact main-grid-border">
		<div class="container">
			<h2 class="w3-head text-center">Contact Us</h2>
			<section id="hire">    
				<form id="filldetails" action="#" method="post">
					  <div class="field name-box">
							<input type="text" name="name" placeholder="Who Are You?"/>
							<label>Name</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field email-box">
							<input type="text" name="email" placeholder="example@email.com"/>
							<label>Email</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field ad-ID">
							<input type="text" name="id" placeholder="Ad ID"/>
							<label>Ad ID</label>
							<span class="ss-icon">check</span>
					  </div>
					  
					  <div class="field phonenum-box">
							<input type="text" name="tel" placeholder="Phone Number"/>
							<label>Phone</label>
							<span class="ss-icon">check</span>
					  </div>

					  <div class="field msg-box">
							<textarea id="msg" rows="4" placeholder="Your message goes here..."></textarea>
							<label>Your Msg</label>
							<span class="ss-icon">check</span>
					  </div>

					 
			  </form>
			<div class="upload">
						 <h3 class="tlt">Add Attachment:</h3>
						<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
			<div id="drop">
				<a>Choose file</a>
				<input type="file" name="upl" multiple />
			</div>

			<ul class="show">
				<!-- The file uploads will be shown here -->
			</ul>
		</form>	
		<div class="clear"></div>
		<form class="submit">
		<input class="button" type="submit" value="Send" />
		</form>
		<!-- JavaScript Includes -->
		<script src="js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="js/jquery.ui.widget.js"></script>
		<script src="js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="js/script.js"></script>
						</div>
			</section>
			<script>
				  $('textarea').blur(function () {
				$('#hire textarea').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('textarea + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('textarea + label + span').css({ 'opacity': 0 });
					}
				});
			});
			$('#hire .field:first-child input').blur(function () {
				$('#hire .field:first-child input').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('.field:first-child input + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('.field:first-child input + label + span').css({ 'opacity': 0 });
					}
				});
			});
			$('#hire .field:nth-child(2) input').blur(function () {
				$('#hire .field:nth-child(2) input').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('.field:nth-child(2) input + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('.field:nth-child(2) input + label + span').css({ 'opacity': 0 });
					}
				});
			});
			$('#hire .field:nth-child(3) input').blur(function () {
				$('#hire .field:nth-child(3) input').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('.field:nth-child(3) input + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('.field:nth-child(3) input + label + span').css({ 'opacity': 0 });
					}
				});
			});
			$('#hire .field:nth-child(4) input').blur(function () {
				$('#hire .field:nth-child(4) input').each(function () {
					$this = $(this);
					if (this.value != '') {
						$this.addClass('focused');
						$('.field:nth-child(4) input + label + span').css({ 'opacity': 1 });
					} else {
						$this.removeClass('focused');
						$('.field:nth-child(4) input + label + span').css({ 'opacity': 0 });
					}
				});
			});
		  //@ sourceURL=pen.js
		</script>    
		<script>
	  if (document.location.search.match(/type=embed/gi)) {
		window.parent.postMessage("resize", "*");
	  }
	</script>
		</div>	
		<!-- address -->
		<div class="container">
			<div class="agileits-get-us">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>Broome St, Canada, NY 10002, USA</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>  +033 111 222 4567</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
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