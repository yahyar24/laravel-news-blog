<!DOCTYPE html>
<html>

    <head>
			<!doctype html>
			<html lang="en">
			  <head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		
        <title>{{$title}}</title>
        <link rel="stylesheet" href="{{asset('csss/all.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('csss/bootstrap.min.css')}}"/>
				<link rel="stylesheet" href="{{asset('csss/all.css')}}"/>
				<link rel="stylesheet" href="{{asset('csss/owl.carousel.min.css')}}"/>
		<link rel="stylesheet" href="{{asset('csss/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('csss/index_style.css')}}"/>
		<link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Scheherazade" rel="stylesheet">



    </head>

    <body>

    @include('includes.header')


    @yield('content')

    @include('includes.footer')



    <script src="{{asset('jss/jquery-3.3.1.min.js')}}"></script>    
    <script src="{{asset('jss/popper.min.js')}}"></script>    
		<script src="{{asset('jss/bootstrap.min.js')}}"></script>
		<script src="{{asset('jss/owl.carousel.min.js')}}"></script>
	<script src="{{asset('jss/main.js')}}"></script>
    </body>

    
    