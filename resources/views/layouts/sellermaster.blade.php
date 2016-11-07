<!DOCTYPE HTML>
<html>
	<head>
		<title>Indy Seller::Home</title>
		<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/prettyPhoto.css') }}">
     <link href="{{ URL::asset('css/price-range.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
     <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
		<link href="{{ URL::asset('css/style.css') }}" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		 <!-- Custom Theme files -->
		<link href="{{ URL::asset('css/style.css') }}" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		 <!---- start-smoth-scrolling---->
		 <script type="text/javascript" src="{{ URL::asset('js/responsiveslides.min.js') }}"></script>
	
		<script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<!----- webfonts ------>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic|Open+Sans:300italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!----- webfonts ------>
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		 
		<!----//End-top-nav-script---->
	</head>
	<body>

 @yield('content')
@include('partials.footer')
<script src="{{ URL::asset('js/jquery.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ URL::asset('js/price-range.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
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
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>