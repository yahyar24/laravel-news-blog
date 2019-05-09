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
                    last_name
                </th>
                <th>
                    email
                </th>
                <th>
                    phone
                </th>
                <th>
                cheak_one
                </th>
                <th>
                cheak_last
                </th>
              <th>
              number_man
                  </th>
                  <th>
              number_ch
                  </th>
                  <th>
                  date_one
                  </th>
                 <th>
                     date_last
                 </th>
                  <th>
                  message
                  </th>
                </thead>

                <tbody>
                @foreach($books as $book)

                    <tr>
                        <td>{{$book->name}}</td>
                        <td>{{$book->last_name}}</td>
                        <td>{{$book->email}}</td>
                        <td>{{$book->phone}}</td>
                        <td>{{$book->cheak_one}}</td>
                        <td>{{$book->cheak_last}}</td>
                        <td>{{$book->number_man}}</td>
                        <td>{{$book->number_ch}}</td>
                        <td>{{$book->date_one}}</td>
                        <td>{{$book->date_last}}</td>
                        <td>{{$book->message}}</td>                        
                        <td>
                            <a href="{{route('book.delete',['id' => $book->id])}}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection