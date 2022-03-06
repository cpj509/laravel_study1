<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){
        $tasks = Task::latest()->get();
        return view('tasks.index', [
            'tasks'=>$tasks
        ]);
    }
    public function create(){
        return view('tasks.create');
    }
    public function store(){
        \request()->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        $task = Task::create(request(['title', 'body']));
        return redirect('/tasks/'.$task->id);
    }

    public function show(Task $task){

        return view('tasks.show',[
            'task'=>$task
        ]);
    }
    public function edit(Task $task){

        return view('tasks.edit',[
            'task'=>$task
        ]);
    }

    public function update(Task $task){

        $task->update([
            'title'=>\request('title'),
            'body'=>\request('body')
        ]);
        return redirect('/tasks/'.$task->id);
    }
    public function destroy(Task $task){

        $task->delete();
        return redirect('/tasks');
    }
}
