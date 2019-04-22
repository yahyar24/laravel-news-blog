@extends('layouts.frontend')

@section('content')

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">search results:{{$query}}</h1>
    </div>
</div>

<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            
            <div class="row">
               @if($posts ->count()>0)
                
                 <div class="cose-item-wrap">
                
                @foreach($posts as $post)
                    
                    
                       <div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="{{$post->featured}}" alt="our case">
                                    </div>
 <a href="{{route('post.single' , ['slug' => $post->slug])}}"><h6 class="case-item__title">{{$post->title}}</h6>

                                    
                                </div>
                            </div>

                    
                    
                    @endforeach
                </div>
            </div>
           
                
                @else
                     
                     <h1 class="text-center">
                         
                         no resluts found!
                     
                     </h1>
                
                
                @endif
        </main>
    </div>
</div>



               

@endsection