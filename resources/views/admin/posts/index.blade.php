@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Image
                </th>
                <th>
                    Title
                </th>
                <th>
                    Edite
                </th>
                <th>
                    Trash
                </th>
                </thead>

                <tbody>
                @foreach($posts as $post)

                    <tr>
                        <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></td>
                        <td>{{$post->title}}</td>
                        <td>
                            <a href="{{route('post.edit',['id' => $post->id])}}" class="btn btn-info">Edite</a>
                        </td>
                        <td>
                            <a href="{{route('post.kill',['id' => $post->id])}}" class="btn btn-danger">Trash</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection