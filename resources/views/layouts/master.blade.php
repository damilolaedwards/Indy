<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Indy</title>
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
</head><!--/head-->
<body>

 @yield('content')
@include('partials.footer')
 <script src="{{ URL::asset('js/jquery.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ URL::asset('js/price-range.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    </body>
</html>


