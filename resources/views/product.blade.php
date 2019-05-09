@extends('layouts.frontendd')
    
		@section('content')

    <body>
   <!-- starting  naaaaaaav naaaaaaaaaaaar -->

      
      <!-- end naaaaaaaaav baaaaaaaaaaaaaar -->
 <!-- start first section  -->

 <section class="pt-3" id="intro"></section>
 <div id="carousel-example-generic" class="carousel slide">
   <div class="carousel-inner text-uppercase" role="listbox">
     <div class="carousel-item-three ">
       <div class="slide-1"> <div class="2"></div> </div> 
       <div class="slide-2"><div class="overlay21"></div> </div>
       <div class="slide-3"> <div class="overlay-2"></div> </div>
       
  
     </div>
   </div>
 </div>
</section>

<!-- end first section -->



      <section class="servise  pt-4">
            
          <div class="header">
                <h2 class="text-center">الخدمات</h2>
                <h3 class="text-center ">   تتميز شرك العربب للسياحه بالعديد من الخدما التي دائما ما تجعلنا ف المراتب الاولى</h3>
                <hr>
              </div>
              <div class="container">
                  <div class="row">
                      
                     <div class="col-md-3 col-sm-6 w-100 my-2 ">
                       <div class="service-content">
                            <h2><i class="fas fa-user-tie"></i> خدمات الإقامة: </h2>
                            <p> {{$settings->iphone}}</p>
                           </div>
                          </div>

                      <div class="col-md-3 col-sm-6 w-100 my-2 ">
                          <div class="service-content">
                      <h2><i class="fas fa-utensils"></i> خدمات الطعام والشراب: </h2>
                      <p> {{$settings->anderwed}}</p>
                     </div>
                    </div>


                           <div class="col-md-3 col-sm-6 w-100 my-2 ">
                              <div class="service-content">
                                <h2><i class="fas fa-gamepad"></i> خدمات الترفيهية: </h2>
                                <p> {{$settings->rebot}}</p>
                               </div>
                              </div>

                               <div class="col-md-3 col-sm-6 w-100 my-2 ">
                                  <div class="service-content">
                                    <h2><i class="fas fa-plane"></i> خدمات وكالات السفر: </h2>
                                    <p> :{{$settings->esay}}</p>
                                   </div>
                                  </div>

                                   <div class="col-md-3 col-sm-6 w-100 my-2">
                                      <div class="service-content">
                                        <h2><i class="fas fa-user-tie"></i> خدمات  الصناعات الحرفية: </h2>
                                        <p> :{{$settings->iphone_b}}</p>
                                       </div>
                                      </div>

                                       <div class="col-md-3 col-sm-6 w-100 my-2 ">
                                          <div class="service-content">
                                            <h2><i class="fas fa-phone-square"></i> خدمات الاتصالات: </h2>
                                            <p> : {{$settings->anderwed_b}}</p>
                                           </div>
                                          </div>

                                           <div class="col-md-3 col-sm-6 w-100 my-2 ">
                                              <div class="service-content">
                                                <h2><i class="fas fa-book-open"></i> خدمات الثقافية: </h2>
                                                <p> : {{$settings->rebot_b}}</p>
                                               </div>
                                              </div>

                                               <div class="col-md-3 col-sm-6 w-100 my-2 ">
                                                  <div class="service-content">
                                                    <h2><i class="fas fa-user-tie"></i> خدمات الإقامة: </h2>
                                                    <p> :{{$settings->esay_b}}</p>
                                                   </div>
                                                  </div>

                    </div>
              </div>

      </section>

      <!-- foooooooooooooooter -->
    




   
      </body>
  </html>

  @endsection