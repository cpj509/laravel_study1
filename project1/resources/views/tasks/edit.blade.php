@extends('layout')

@section('title')
    Tasks
@endsection
@section('content')
    <h1>Edit Page</h1>
    <form action="/tasks/{{$task->id}}" method="post">
        @method('PUT')
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="input text" value="{{$task->title}}" required><br>
        <label for="body">Body</label><br>
        <textarea name="body" id="body" cols="30" rows="10" placeholder="input text" required>{{$task->body}}</textarea><br>
        <button>Submit</button>
    </form>
@endsection
