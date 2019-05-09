@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    name
                </th>
                <th>
                    email
                </th>
                <th>
                    subject
                </th>
                <th>
                    message
                </th>
                <th>
                delete
                </th>
                </thead>

                <tbody>
                @foreach($message as $message)

                    <tr>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                       <td>{{$message->body}}</td>
                        
                        <td>
                            <a href="{{route('message.delete',['id' => $message->id])}}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection