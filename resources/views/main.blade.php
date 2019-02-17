
<!DOCTYPE html>
<html lang="en">
<head>
<title>Classified ad By Ajibade Hammed</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}"><!-- bootstrap-select-CSS -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" /><!-- flexslider-CSS -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="{{asset('css/menu_sideslide.css')}}" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
</head>
<body>

	@include('partials.navigation')
	@include('partials.header')
	@yield('content')
	@include('partials.footer')





		<!-- Navigation-Js-->
			<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
			<script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
		<!-- //Navigation-Js-->
		<!-- js -->
		<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
		<!-- js -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{asset('js/bootstrap.js')}}"></script>
		<script src="{{asset('js/bootstrap-select.js')}}"></script>
		<script>
		  $(document).ready(function () {
			var mySelect = $('#first-disabled2');

			$('#special').on('click', function () {
			  mySelect.find('option:selected').prop('disabled', true);
			  mySelect.selectpicker('refresh');
			});

			$('#special2').on('click', function () {
			  mySelect.find('option:disabled').prop('disabled', false);
			  mySelect.selectpicker('refresh');
			});

			$('#basic2').selectpicker({
			  liveSearch: true,
			  maxOptions: 1
			});
		  });
		</script>
		<!-- language-select -->
		<script type="text/javascript" src="{{asset('js/jquery.leanModal.min.js')}}"></script>
		<link href="{{asset('css/jquery.uls.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/jquery.uls.grid.css')}}" rel="stylesheet"/>
		<link href="{{asset('css/jquery.uls.lcd.css')}}" rel="stylesheet"/>
		<!-- Source -->
		<script src="{{asset('js/jquery.uls.data.js')}}"></script>
		<script src="{{asset('js/jquery.uls.data.utils.js')}}"></script>
		<script src="{{asset('js/jquery.uls.lcd.js')}}"></script>
		<script src="{{asset('js/jquery.uls.languagefilter.js')}}"></script>
		<script src="{{asset('js/jquery.uls.regionfilter.js')}}"></script>
		<script src="{{asset('js/jquery.uls.core.js')}}"></script>
		<script>
					$( document ).ready( function() {
						$( '.uls-trigger' ).uls( {
							onSelect : function( language ) {
								var languageName = $.uls.data.getAutonym( language );
								$( '.uls-trigger' ).text( languageName );
							},
							quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
						} );
					} );
				</script>
		<!-- //language-select -->
		<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script><!-- flexisel-js -->
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
		<!-- Slider-JavaScript -->
			<script src="{{asset('js/responsiveslides.min.js')}}"></script>
			 <script>
			$(function () {	
			  $("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				maxwidth: 800,
				namespace: "large-btns"
			  });

			});
		  </script>
		<!-- //Slider-JavaScript -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
			<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
@yield('extrajs')
</body>		
</html>