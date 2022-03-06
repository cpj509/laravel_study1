@extends('layout')

@section('title')
    Tasks
@endsection
@section('content')
    <h1>Task Lists</h1>
    <a href="tasks/create"><button>create</button></a>
    <ul>
{{--        {{$tasks}}--}}
        @foreach($tasks as $task)
            <a href="/tasks/{{$task->id}}"><li>Title: {{$task->title}}</li></a>Created Time: {{$task->updated_at}}
        @endforeach

    </ul>
@endsection
