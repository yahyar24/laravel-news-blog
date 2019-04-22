

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title></title>

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
</head>

@include('includes.header')



<div class="gallery" style="margin-top:40px;">
    <div class="text-center">
      <h2>المعرض</h2>
      <p>اليكم المعرض الخاص  بنا </p>
    </div>
    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{$first_post->featured}}" alt="{{$first_post->title}}" class="img-responsive" />
          <figcaption>
            <h4>{{$first_post->title}}</h4>
            <p>{{$first_post->created_at->diffForHumans()}}</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{$second_post->featured}}" alt="{{$second_post->title}}" class="img-responsive" />
          <figcaption>
            <h4>{{$second_post->title}}</h4>
            <p>{{$second_post->created_at->diffForHumans()}}.</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{$third_post->featured}}" alt="" class="img-responsive" />
          <figcaption>
            <h4>{{$third_post->title}}</h4>
            <p>{{$third_post->created_at->diffForHumans()}}.</p>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{$fourth_post->featured}}" alt="" class="img-responsive" />
          <figcaption>
            <h4>{{$fourth_post->title}}</h4>
            <p>{{$fourth_post->created_at->diffForHumans()}}</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{$five_post->featured}}" alt="" class="img-responsive" />
          <figcaption>
            <h4>{{$five_post->title}}</h4>
            <p>{{$five_post->created_at->diffForHumans()}}.</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{$sexes_post->featured}}" alt="" class="img-responsive" />
          <figcaption>
            <h4>{{$sexes_post->title}}</h4>
            <p>{{$sexes_post->created_at->diffForHumans()}}.</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
  @include('includes.footer')


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
