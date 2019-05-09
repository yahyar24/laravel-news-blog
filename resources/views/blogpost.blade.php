@extends('layouts.frontendd')
    
		@section('content')

    <body>
           <!-- starting  naaaaaaav naaaaaaaaaaaar -->


      
      <!-- end naaaaaaaaav baaaaaaaaaaaaaar -->
      <section class="news">
            <div class="header pt-5">
                    <h2 class="text-center pt-3">  الاخبار</h2>
                    <hr>
            </div>

<div class="container">
    <div class="row">
        <div class="col-md-3 w-100 mb-3">

                <div class="right-side ">
                    <input class="form-control mb-3" type="search" placeholder="ابحث عن :">

                            <select class="w-100 mb-2">
                                <option>اختار وجهتك القادمه</option>
                                <option>مصر</option>
                                <option>العراق</option>
                                <option>الكويت</option>
                            </select>
                            <button type="search" class=" mb-3 btn btn-block btn-danger"> ابحث</button>
                            <div>
                                <h3> الاكثر قراءه</h3>
                                <Ul class="mb-3 list-unstyled">
                                    <li><a href="#">عنوان المقاله</a> </li>
                                    <li><a href="#">عنوان المقاله</a> </li>
                                    <li><a href="#">عنوان المقاله</a> </li>
                                    <li><a href="#">عنوان المقاله</a> </li>
                                </Ul>
                            </div>
                            <div class="mb-4">
                                    <h3> اخر العروض</h3>
                                    <Ul class=" list-unstyled">
                                        <li><a href="#">عرض المالديف</a> </li>
                                        <li><a href="#">عرض اسبانيا</a> </li>
                                        <li><a href="#">عرض فرنسا</a> </li>
                                        <li><a href="#">عرض اليونان</a> </li>
                                    </Ul>
                                </div>

                                <div class="sociall ">
                                        <h3 class="mb-3"> تواصل معنا </h3>
                                        <a href="#"> <i class="fab fa-facebook-f mx-2 border p-2"></i></a>
                                        <a href="#"> <i class="fab fa-twitter mx-2 border p-2"></i></a>
                                        <a href="#"> <i class="fab fa-instagram mx-2 border p-2"></i></a>
                                       <a href="#"> <i class="fab fa-google-plus-g mx-2 border p-2"></i></a>
                                       
                                        </div>
              
           </div>
        </div>
     <div class="col-md-9">
           <div class="row">
                      
                        @foreach($career->posts()->orderBy('created_at','desc')->take(5)->get() as $post)
            
                        <div class="col-md-6 w-100  news-parent">
      
                                <div class="news-content">
                                    <img class="img-fluid" src="{{$post->featured}}">
                                    <div class="news-text my-3">
                                        <p><i class="far fa-clock mr-2"> </i>    {{$post->created_at->diffForHumans()}}  <i class="fas fa-user mx-2"></i>   بواسطه <a href="">الادمن </a></p>
                                        <a href="{{route('post.single', ['slug' => $post->slug  ])}}"> {{$post->title}}</a>
                                    </div>
                                </div>

                                
                            </div>

                           
                            @endforeach
                </div>


            </div>
        </div>
      

        

            </section>
           
            
            	<!-- fooooooooooooooter -->
  
  
  
  </body>
  </html>

  @endsection
        


  


     