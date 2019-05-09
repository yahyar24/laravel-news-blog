@extends('layouts.frontendd')
    
		@section('content')
		<body>
   <!-- starting  naaaaaaav naaaaaaaaaaaar -->




	 <!-- end naaaaaaaaaaav baaaaaaaaaaaaaaaar -->
	 
	 <!-- start first section  -->

	 <section class="pt-3" id="intro"></section>
			<div id="carousel-example-generic" class="carousel slide">
				<div class="carousel-inner text-uppercase" role="listbox">
					<div class="carousel-item-three ">
						<div class="slide-1"> <div class="overlay-1"></div> </div> 
						<div class="slide-2"><div class="overlay-1"></div> </div>
						<div class="slide-3"> <div class="overlay-1"></div> </div>
												

						
						
							  <div class="center-block"  id="home">
							<div class="center-block-wrap">
								<div class="center-block-body ">
										<p> افضل عروض السفر تجدوها	</p>
									<h2>اسعار مناسبة</h2>
										<p> تبدأ من</p>
										<p > 500 $</p>
										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



	 <!-- end first section -->

		  <!-- start services section -->
		  <div class="container-fluid  services py-5" id="service">
				<div class="header">
			  <h2 class="text-center">{{$career->name}}</h2>
			  <hr>
			</div>


	
			<div class="row mt-4">
				
      @foreach($career->posts()->orderBy('created_at','desc')->take(8)->get() as $post)

			<div class="col-md-3 sm-6 w-100 my-2 ">
							<div class="card blog-1 ">
								<img class="img-fluid" src="{{$post->featured}}" >
							  <div class="card-body">
									<h5 class="card-title py-3 text-center">{{$post->title}}</h5>
									<hr>
									  <h5 ><i class="fas fa-street-view"></i> {{$post->day}}</h5>
									  <h5 class="py-2 "> <i class="fas fa-map-marker-alt"></i>{{$post->city}}</h5>
									  <h5 class=" text-center">   {!!$post->body!!}</h5>
									  <h2 class=" text-center"> {{$post->price}} $</h2>
									  <h5 class=" text-center">  للفرد في الغرفة الثنائية</h5>


									  <p class="border-top 1px solid #eee pt-3"><a class="float-right" href="{{route('post.single' , ['slug' => $post->slug])}}"> المزيد </a> </p>
									  <div class="clearfix"></div>
								  </div>
								</div>
              </div>
              @endforeach
			</div>
			<div class="container-fluid  services py-5" id="service">
				<div class="header">
			  <h2 class="text-center">{{$tutoirals->name}}</h2>
			  <hr>
			</div>
			<div class="row mt-4">
				
      @foreach($tutoirals->posts()->orderBy('created_at','desc')->take(8)->get() as $post)

			<div class="col-md-3 sm-6 w-100 my-2 ">
							<div class="card blog-1 ">
								<img class="img-fluid" src="{{$post->featured}}" >
							  <div class="card-body">
									<h5 class="card-title py-3 text-center">{{$post->title}}</h5>
									<hr>
									  <h5 ><i class="fas fa-street-view"></i> {{$post->day}}</h5>
									  <h5 class="py-2 "> <i class="fas fa-map-marker-alt"></i>{{$post->city}}</h5>
									  <h5 class=" text-center">   {!!$post->body!!}</h5>
									  <h2 class=" text-center"> {{$post->price}} $</h2>
									  <h5 class=" text-center">  للفرد في الغرفة الثنائية</h5>


									  <p class="border-top 1px solid #eee pt-3"><a class="float-right" href="{{route('post.single' , ['slug' => $post->slug])}}"> المزيد </a> </p>
									  <div class="clearfix"></div>
								  </div>
								</div>
              </div>
              @endforeach
			</div>
		  </div>
		  

		 <!-- end services section -->


			 <!-- tesmoniaaaaaaaaaal section -->
		
			 <div class="testmonial container-fluid" id="testmonial">
				<div class="overlay-testmonial">
						<div class="header">
								<h2 class="text-center pt-3">الفريق</h2>
								<hr>
							</div>
				
					
				<div class="owl-carousel ">
				
					
					<div class="first text-center m-5 ">
					<img class="w-25 img-fluid m-auto" src="images/person-1.jpg" alt="...">
								<p> من اكتر الناس احترافيه ف الدنيا شكر خاص ليكم </p>
					<h5> ""الاستاذه فاطمه""</h5>
				</div>
					
					<div class="first text-center m-5 ">
					<img class="w-25 img-fluid m-auto" src="images/person-3.jpg" alt="...">
					<p>  لكم كل التقدير والاحترام ...موقع يغنيك في جميع النواحي من الاف الى الياء ..من حجوزات و تذاكر طيران ،

						</p>
					<h5> ""الاستاذ حسن""</h5>
				
				</div>
						<div class="first text-center m-5 ">
					<img class="w-25 img-fluid m-auto" src="images/person-2.jpg" alt="...">
					<p> من افضل الماكن التي زرتها ف حياتي</p>
					<h5> ""الاستاذة هبة""</h5>
						
				</div>
					
						<div class="first text-center m-5 ">
					<img class="w-25 img-fluid m-auto" src="images/person-4.jpg" alt="...">
								<p>  لكم كل التقدير والاحترام ...موقع يغنيك في جميع النواحي من الاف الى الياء ..من حجوزات و تذاكر طيران 	</p>
					<h5> ""الاستاذ عبد الله ""</h5>
					
				</div>
		
				 </div>
					</div>
				</div>
			 
			<!-- tesmoniaaaaaaaaaal section -->
<!-- fooooooooooooooter -->
		







     
    </body>
</html>

@endsection