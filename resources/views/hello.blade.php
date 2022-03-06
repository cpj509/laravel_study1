@extends('layout')
@section('title')
    Hello
@endsection
@section('content')
    Hello
    <ul>
        @foreach($books as $book)
            <li>{{$book}}</li>
        @endforeach
    </ul>
@endsection
