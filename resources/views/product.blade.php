

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title></title>
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
  <link rel="shortcut icon" href="{{asset('flte/ico/favicon.png')}}" />

  <!-- Bootstrap -->
  <link href="{{asset('csss/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('csss/font-awesome.min.css')}}">
  <link rel="stylesheet" href="csss/animate.css')}}">
  <link href="{{asset('csss/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('csss/style.css')}}" rel="stylesheet" />

  <!-- =======================================================
    Theme Name: Day
    Theme URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
      <!--new templates -->


    <!--end template day -->
    <!-- css -->
 
  <!-- Theme skin -->
  <!-- Fav and touch icons -->
  

</head>


@include('includes.header')

<section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <article>
              <div class="row">
              @foreach($tutoirals->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3 class="text-center"><a href="#">{{$post->title}}</a></h3>
                    </div>
                    <img src="{{$post->featured}}" alt="" />
                  </div>
                  <p>
                  {!!$post->body!!}
                  
                  </p>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i><a href="#"> {{$post->created_at->diffForHumans()}}</a></li>
                      <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                      <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                      <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                    </ul>
                    <!--a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a-->
                  </div>
                  @endforeach
                </div>
              </div>
            </article>
            <article>
           
            </article>
            <article>
            
            </article>
            <article>
         
            </article>
           
          </div>
        
        </div>
      </div>
    </section>

    @include('includes.footer')



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

 

  

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="{{asset('jss/jquery.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('jss/bootstrap.min.js')}}"></script>
  <script src="{{asset('jss/wow.min.js')}}"></script>
  <script>
    wow = new WOW({}).init();
  </script>
</body>

</html>
