@extends('layout')

@section('title')
    Tasks
@endsection
@section('content')
    <div>
        <a href="/tasks">Go to Task List</a><br>
        <h1>Show Task Lists</h1>
        <a href="/tasks/{{$task->id}}/edit"><button>edit</button></a>
        <form action="/tasks/{{$task->id}}" method="post">
            @method('DELETE')
            @csrf
            <button>delete</button>
        </form>
    </div>
    Title: {{$task->title}}<br>
    Body: {{$task->body}}<br>
    Created Time: {{$task->created_at}}<br>
    Updated Time: {{$task->updated_at}}
@endsection
