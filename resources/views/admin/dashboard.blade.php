@extends('layouts.app')

@section('content')
         <div class="col-lg-3">
             <div class="panel panel-info">
             
             <div class="panel-heading text-center">
                 
                 Puplish post
                 </div>
                 <div class="panel panel-body">
                     <h1 class="text-center">{{$posts_count}}</h1>
                 
                 
                 </div>
             
             </div>
             
        </div>

   <div class="col-lg-3">
             <div class="panel panel-danger">
             
             <div class="panel-heading text-center">
                 
                 Trahed post
                 </div>
                 <div class="panel panel-body">
                     <h1 class="text-center">{{$trashed_count}}</h1>
                 
                 
                 </div>
             
             </div>
             
        </div>
   <div class="col-lg-3">
             <div class="panel panel-success">
             
             <div class="panel-heading text-center">
                 
                    User
                 </div>
                 <div class="panel panel-body">
                     <h1 class="text-center">{{$users_count}}</h1>
                 
                 
                 </div>
             
             </div>
             
        </div>
   <div class="col-lg-3">
             <div class="panel panel-info">
             
             <div class="panel-heading text-center">
                 
                 Categories post
                 </div>
                 <div class="panel panel-body">
                     <h1 class="text-center">{{$categories_count}}</h1>
                 
                 
                 </div>
             
             </div>
             
        </div>

@endsection
