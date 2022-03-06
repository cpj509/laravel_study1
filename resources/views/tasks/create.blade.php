@extends('layout')

@section('title')
    Tasks
@endsection
@section('content')
    <h1>Create Lists</h1>
    <form action="/tasks" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="input text" ><br>
        @error('title')
            <small>{{$message}}</small><br>
        @enderror
        <label for="body">Body</label><br>
        <textarea name="body" id="body" cols="30" rows="10" placeholder="input text" ></textarea><br>
        @error('body')
        <small>{{$message}}</small><br>
        @enderror
        <button>Submit</button>
    </form>
    @if($errors->any())
        {{$errors}}
    @endif
@endsection
