@extends('layouts.frontendd')
    
		@section('content')

    <body>
           <!-- starting  naaaaaaav naaaaaaaaaaaar -->

  @include('includes.header')

      
      <!-- end naaaaaaaaav baaaaaaaaaaaaaar -->
      <section class="gallary">
        <div class="container pt-5 mt-5">
            <div class="row">

                <div class="col-md-6 caption-dad ">
                   <a> <img class="img-fluid" src="./images/Homepage-1.jpg"></a>
                    <div class="caption"><p>اجمل الرحلات</p></div>

                </div>

                <div class="col-md-6 ">
                    <div class="row">

                    
                    @foreach($gallery->posts()->orderBy('created_at','desc')->take(12)->get() as $post)

                            <div class="col-md-6 pb-3 caption-dad ">
                                   <a> <img mg class="img-fluid" src="{{$post->featured}}"></a>
                                    <div class="caption"><p>{{$post->title}}</p></div>
                            </div>

                            @endforeach

            
        </div>


      </section>
      <!-- <foooooooooooooooooooooooter -->

         @include('includes.footer')

     
    </body>
</html>

@endsection