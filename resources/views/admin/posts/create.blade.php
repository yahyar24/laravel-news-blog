@extends('layouts.app')


@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel panel-heading">
            create new post
        </div>
        <div class="panel-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="day">day</label>
                    <input type="text" name="day" class="form-control">
                </div>
                <div class="form-group">
                    <label for="city">city</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Featuered image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category"> selct acategory</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}  </option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags"> Selcet tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label><input type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->tag}} </label>
                        </div>
                        @endforeach
                </div>


                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" name="body" id="body" cols="5" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            stor post
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    @stop

@section('styles')
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    @stop

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#body').summernote();
        });
    </script>

    @stop