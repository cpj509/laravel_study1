@extends('layout')
@section('title')
    Contact
@endsection
@section('content')
    Contact
    @foreach($books as $book)
        <li>{{$book}}</li>
    @endforeach
@endsection
