@extends('layouts.cssandjs')

<!DOCTYPE html>
<html>

    <head>
			<!doctype html>
			<html lang="en">
			  <head>
				<!-- Required meta tags -->
        <meta charset="utf-8">
        <title>{{$settings->stie_name}}</title>
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('csss/bootstrap.min.css')}}"/>
				<link rel="stylesheet" href="{{asset('csss/all.css')}}"/>
				<link rel="stylesheet" href="{{asset('csss/owl.carousel.min.css')}}"/>
		<link rel="stylesheet" href="{{asset('csss/owl.theme.default.min.css')}}"/>
		<link rel="stylesheet" href="{{asset('csss/index_style.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Scheherazade" rel="stylesheet">

    <body>
   <!-- starting  naaaaaaav naaaaaaaaaaaar -->
@include('includes.header')

      
      <!-- end naaaaaaaaav baaaaaaaaaaaaaar -->
      <div class="details">
      <div class="container mt-5 mx-auto">
          <div class="row">

     <div class="col-md-9">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{$post->featured}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('./images/card-5.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('./images/card-4.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 sm-6 w-100 my-2 ">
            <div class="card blog-1 ">
                <img class="img-fluid" src="{{$post->featured}}" >
                <div class="card-body">
                    <h5 class="card-title py-3 text-center">{{$post->title}}</h5>
                    <hr>
                        <h5 ><i class="fas fa-street-view"></i> {{$post->day}}</h5>
                        <h5 class="py-2 "> <i class="fas fa-map-marker-alt"></i>{{$post->title}}</h5>
                        <h5 class=" text-center">  السعر يبدأ من</h5>
                        <h2 class=" text-center"> {{$post->price}} $</h2>


                        <a style="color:#fff;" href="#pills-contact" type="button" class="btn book-btn btn-block "> احجز الان </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-5">


                    <ul class="nav nav-pills mb-3 taps-link" id="pills-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ملخص  الرحله</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">تفاصيل الرحله</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">احجز الان</a>
                            </li>
                          </ul>
                          <div class="tab-content " id="pills-tabContent">
                            <div-- class="tab-pane fade show active my-toggle" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <p>يشمل المدن التالية:</p>
                                <h4>{{$post->title}}</h4>

                           <div class="paren">
                                <h5 class="cair"><a> {{$post->day}}</a></h5>
                                <ul class="ml-5"> 
                                    <li>{{$post->city}}.</li>
                                    <li>   {{$post->price}}.$ </li>
                                </ul>
                              </div>

                         
         <div class="tab-pane fade my-toggle" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="paren">
                                <h5>البرنامج يشمل </h5>
                                @include('admin.includes.errors')

        <ul class="list-unstyled">
            
            <li> <i class="fas fa-hand-peace"></i>{!!$post->body!!}
            </li>
        </ul></div>
        
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <form action="{{route('book.store')}}" method="post" class="form-contact">
                                    {{csrf_field()}}
                            <div class="row">
                              <div class="col-md-6 my-2">

                                <input name="name" type="text" class="form-control" placeholder="الاسم الاول">
                              </div>

                              <div class="col-md-6 my-2">
                                <input name="last_name" type="text" class="form-control" placeholder="الاسم الثاني">
                              </div>

                              <div class="col-md-6 my-2">
                                    <input name="email" type="mail" class="form-control" placeholder="الايميل">
                              </div>

                            <div class="col-md-6 my-2">
                              <input name="phone" type="number" class="form-control" placeholder="رقم الموبايل">
                                      </div>

                                      <div class="col-md-6 my-2 w-50  selected">
                            <select name="cheak_one" class="w-100">
                                <option>المغادره من</option>
                                <option>مصر</option>
                                <option>العراق</option>
                                <option>الكويت</option>
                            </select>
                          </div>
                          <div  class="col-md-6 my-2 w-50 selected">
                                  <select name="cheak_last" class="w-100">
                                      <option>المغادره الى</option>
                                      <option>مصر</option>
                                      <option>العراق</option>
                                      <option>الكويت</option>
                                  </select>
                                          </div>
                                          <div  class="col-md-6 my-2 w-50 selected">
                                            <select name="number_man" class="w-100">
                                                <option value="1">عدد الافراد البالغين</option>
                                                <option value="2">1</option>
                                                <option value="3">2</option>
                                                <option value="4">3</option>
                                            </select>
                                            </div>
                                            <div class="col-md-6 my-2 w-50 selected">
                                            <select name="number_ch" class="w-100">
                                                <option value="1">عدد الاطفال </option>
                                                <option value="2">1</option>
                                                <option value="3">2</option>
                                                <option value="4">3</option>
                                            </select>
                                       </div>

                                            <div class="col-md-6 my-2">
                                          <input name="date_one" class="form-control" type="date"  value="" placeholder="  تاريخ الذهاب__/__/____ ">
                                        </div>

                                        <div class="col-md-6 my-2">
                                          <input name="date_last" class="form-control" type="date"  value="" placeholder="  تاريخ العوده__/__/____ ">
                                        </div>
                                        <div class="col-md-12 mt-2 mb-5">
                                          <input name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="من افضلك اكتب ان كانت لديك اي طلبات اخرى">

                                        </div>
                                                <button class="btn btn-info" >ارسال الطلب </button>

                                     </form>
                            </div>
                            
                          </div>
            </div>
    </div>
</div>
<div class="pagination-arrow">
                    
                    
                    @if($prev)
                  
                    <a href="{{route('post.single', ['slug' => $prev ->slug])}}" class="btn-next-wrap">
                      <div class="btn-content">
                          <div class="btn-content-title">المنشور التالي</div>
                          <p class="btn-content-subtitle">{{$prev->title}}</p>
                      </div>
                      <svg class="btn-next">
                          <use xlink:href="#arrow-right"></use>
                      </svg>
                  </a>
                  
                  
                  @endif

                      @if($next)
                    <a href="{{route('post.single', ['slug' => $next ->slug])}}" class="btn-prev-wrap">
                      <svg class="btn-prev">
                          <use xlink:href="#arrow-left"></use>
                      </svg>
                      <div class="btn-content">
                          <div class="btn-content-title"> المنشور السابق</div>
                          <p class="btn-content-subtitle">{{$next->title}}</p>
                      </div>
                  </a>
                  
                  
                  @endif

              

              </div>
</div>



	<!-- fooooooooooooooter -->
		
  @include('includes.footer')

  <svg style="display:none;">
    <symbol id="arrow-left" viewBox="122.9 388.2 184.3 85">
        <path d="M124.1,431.3c0.1,2,1,3.8,2.4,5.2c0,0,0.1,0.1,0.1,0.1l34.1,34.1c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4
		c1.6-1.6,2.4-3.7,2.4-5.9s-0.9-3.9-2.4-5.5l-19.9-19.5h11.1c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3h-17.6c-1.1,0-2.1,0.6-2.5,1.6
		c-0.4,1-0.2,2.1,0.6,2.9l24.4,24.4c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9
		l-34.2-34.2c0,0,0,0,0,0c-0.6-0.6-0.8-1.4-0.9-1.9c0,0,0,0,0,0c0-0.2,0-0.4,0-0.6c0.1-0.6,0.3-1.1,0.7-1.6c0-0.1,0.1-0.1,0.2-0.2
		l34.1-34.1c0.6-0.6,1.3-0.9,2.1-0.9s1.6,0.3,2.1,0.9c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1l-24.4,24.4c-0.8,0.8-1,2-0.6,3
		c0.4,1,1.4,1.7,2.5,1.7h125.7c1.5,0,2.7-1,2.7-2.5c0-1.5-1.2-2.5-2.7-2.5H152.6l19.9-20.1c1.6-1.6,2.4-3.8,2.4-6s-0.9-4.4-2.4-6
		c-1.6-1.6-3.7-2.5-5.9-2.5s-4.3,0.9-5.9,2.4l-34.1,34.1c-0.2,0.2-0.3,0.3-0.5,0.5c-1.1,1.2-1.8,2.8-2,4.4
		C124.1,430.2,124.1,430.8,124.1,431.3C124.1,431.3,124.1,431.3,124.1,431.3z"></path>
        <path d="M283.3,427.9h14.2c1.7,0,3,1.3,3,3c0,1.7-1.4,3-3,3H175.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h122.4
		c4.6,0,8.4-3.9,8.4-8.5c0-4.6-3.8-8.5-8.4-8.5h-14.2c-1.5,0-2.7,1-2.7,2.5C280.7,426.9,281.8,427.9,283.3,427.9z"></path>
    </symbol>
    <symbol id="arrow-right" viewBox="122.9 388.2 184.3 85">
        <path d="M305.9,430.2c-0.1-2-1-3.8-2.4-5.2c0,0-0.1-0.1-0.1-0.1l-34.1-34.1c-1.6-1.6-3.7-2.5-5.9-2.5c-2.2,0-4.3,0.9-5.9,2.4
		c-1.6,1.6-2.4,3.7-2.4,5.9s0.9,4.1,2.4,5.7l19.9,19.6h-11.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h17.6c1.1,0,2.1-0.7,2.5-1.7
		c0.4-1,0.2-2.2-0.6-2.9l-24.4-24.5c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1c0.6-0.6,1.3-0.9,2.1-0.9c0.8,0,1.6,0.3,2.1,0.9
		l34.2,34.2c0,0,0,0,0,0c0.6,0.6,0.8,1.4,0.9,1.9c0,0,0,0,0,0c0,0.2,0,0.4,0,0.6c-0.1,0.6-0.3,1.1-0.7,1.6c0,0.1-0.1,0.1-0.2,0.2
		l-34.1,34.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1l24.4-24.4c0.8-0.8,1-1.9,0.6-2.9
		c-0.4-1-1.4-1.6-2.5-1.6H158.1c-1.5,0-2.7,1-2.7,2.5c0,1.5,1.2,2.5,2.7,2.5h119.3l-19.9,20c-1.6,1.6-2.4,3.7-2.4,6s0.9,4.4,2.4,5.9
		c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4l34.1-34.1c0.2-0.2,0.3-0.3,0.5-0.5c1.1-1.2,1.8-2.8,2-4.4
		C305.9,431.3,305.9,430.8,305.9,430.2C305.9,430.2,305.9,430.2,305.9,430.2z"></path>
        <path d="M146.7,433.9h-14.2c-1.7,0-3-1.3-3-3c0-1.7,1.4-3,3-3h122.4c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3H132.4
		c-4.6,0-8.4,3.9-8.4,8.5c0,4.6,3.8,8.5,8.4,8.5h14.2c1.5,0,2.7-1,2.7-2.5C149.3,434.9,148.1,433.9,146.7,433.9z"></path>
    </symbol>
    <symbol id="to-top" viewBox="0 0 32 32">
        <path d="M17,22 L25.0005601,22 C27.7616745,22 30,19.7558048 30,17 C30,14.9035809 28.7132907,13.1085075 26.8828633,12.3655101
         L26.8828633,12.3655101 C26.3600217,9.87224935 24.1486546,8 21.5,8 C20.6371017,8 19.8206159,8.19871575 19.0938083,8.55288165
         C17.8911816,6.43144875 15.6127573,5 13,5 C9.13400656,5 6,8.13400656 6,12 C6,12.1381509 6.00400207,12.275367 6.01189661,12.4115388
          L6.01189661,12.4115388 C4.23965876,13.1816085 3,14.9491311 3,17 C3,19.7614237 5.23249418,22 7.99943992,22 L16,22 L16,16 L12.75,19.25
           L12,18.5 L16.5,14 L21,18.5 L20.25,19.25 L17,16 L17,22 L17,22 Z M16,22 L16,27 L17,27 L17,22 L16,22 L16,22 Z" id="cloud-upload"></path>
    </symbol>

</svg>



  <script src="{{asset('jss/jquery-3.3.1.min.js')}}"></script>    
    <script src="{{asset('jss/popper.min.js')}}"></script>    
		<script src="{{asset('jss/bootstrap.min.js')}}"></script>
		<script src="{{asset('jss/owl.carousel.min.js')}}"></script>
	<script src="{{asset('jss/main.js')}}"></script>
     

</body>
</html>