<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <!--new templates -->
    <link href="{{asset('csss/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('csss/animate.css')}}">
  <link href="{{asset('csss/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('csss/style.css')}}" rel="stylesheet" />

    <!--end template day -->
    <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{asset('flte/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('flte/css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('flte/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{asset('flte/css/jcarousel.css')}}" rel="stylesheet" />
  <link href="{{asset('flte/css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('flte/css/style.css')}}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('flte/ico/apple-touch-icon-144-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('flte/ico/apple-touch-icon-114-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('flte/ico/apple-touch-icon-72-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('flte/ico/apple-touch-icon-57-precomposed.png')}}" />
  <link rel="shortcut icon" href="{{asset('flte/ico/favicon.png" />

</head>
    
<body class=" ">

<div class="content-wrapper">
    

   
      @yield('content')

<!-- Subscribe Form -->



<!-- Footer -->


<script src="{{asset('flte/js/jquery.js')}}"></script>
  <script src="{{asset('flte/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('flte/js/bootstrap.js')}}"></script>
  <script src="{{asset('flte/js/jcarousel/jquery.jcarousel.min.js')}}"></script>
  <script src="{{asset('flte/js/jquery.fancybox.pack.js')}}"></script>
  <script src="{{asset('flte/js/jquery.fancybox-media.js')}}"></script>
  <script src="{{asset('flte/js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{asset('flte/js/portfolio/jquery.quicksand.js')}}"></script>
  <script src="{{asset('flte/js/portfolio/setting.js')}}"></script>
  <script src="{{asset('flte/js/tweet/jquery.tweet.js')}}"></script>
  <script src="{{asset('flte/js/jquery.flexslider.js')}}"></script>
  <script src="{{asset('flte/js/jquery.nivo.slider.js')}}"></script>
  <script src="{{asset('flte/js/modernizr.custom.js')}}"></script>
  <script src="{{asset('flte/js/jquery.ba-cond.min.js')}}"></script>
  <script src="{{asset('flte/js/jquery.slitslider.js')}}"></script>
  <script src="{{asset('flte/js/animate.js')}}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>
  <script src="{{asset('js/tostr.min.js')}}"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{asset('jss/jquery.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('jss/bootstrap.min.js')}}"></script>
  <script src="{{asset('jss/wow.min.js')}}"></script>
  <script>
    wow = new WOW({}).init();
  </script>
    <script src="{{ asset('js/app.js') }}"></script>

  
<script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")

        @endif

    
 </script>

    
</body>
</html>