<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>{{$settings->site_name}}</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Bootstrap -->
  <link href="{{asset('csss/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('csss/animate.css')}}">
  <link href="{{asset('csss/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('csss/style.css')}}" rel="stylesheet" />
  

  <!-- =======================================================
    Theme Name: Day
    Theme URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
@include('includes.header')
<div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="{{asset('imgg/slide3.jpg')}}" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span>نقدم لكم احدث التنقيات</span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>عالم من التقنية لا مثيل له</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required"><a style="color:#fff;" href="{{route('product')}}">انظر هنا</a></button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required"><a  href="{{route('blogpost')}}">العلوم التقنية</a></button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="{{asset('imgg/slide2.jpg')}}" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2>زورونا </h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>رضاكم هدفنا</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required"><a style="color:#fff;" href="{{route('product')}}">انظر هنا</a></button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required"><a  href="{{route('blogpost')}}">العلوم التقنية</a></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('imgg/slide3.jpg')}}" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>التقنيات</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>عالم جميل ومستقبل جديد</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required"><a style="color:#fff;" href="{{route('product')}}">انظر هنا</a></button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required"><a  href="{{route('blogpost')}}">العلوم التقنية</a></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
        <i class="fas fa-arrow-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
        <i class="fas fa-arrow-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  
  <hr>

  <div class="services">
    <div class="container">
      <div class="text-center">
        <h2>consectetur adipisicing elit</h2>
      </div>
      <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
      <i class="fas fa-mobile"></i>
        <h3>Fully Responsive</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
      </div>
      <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
      <i class="fab fa-android"></i>
        <h3>Retina Ready</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
      </div>
      <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
      <i class="fas fa-robot"></i>
        <h3>Fresh and Clean</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
      </div>
      <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
      <i class="fas fa-cogs"></i>
        <h3>Easy to Customize</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
      </div>
    </div>
  </div>

  <section class="action">
    <div dir="rtl" class="container">
        <div class="right-image hidden-xs"></div>

      <div  class="left-text hidden-xs">
        <h4>Amet porro numquam ratione</h4>
        <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam.
          Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
      </div>
    </div>
  </section>

  <div class="gallery">
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



<!--strt footer -->

@include('includes.footer')

<!--end footer -->

            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Day
            -->
           

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
