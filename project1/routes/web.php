<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//직접 함수 작성
//Route::get('/', function () {
//    $books = [
//        'java1',
//        'laravel',
//        'python'
//    ];
//    return view('welcome', [
//        'books' => $books
//    ]);
//});

//컨트롤러 이용
Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', function(){
    $books = [
        'java2',
        'laravel',
        'python'
    ];
    return view('hello')->with(['books' => $books]);
});
Route::get('/contact', function(){
    $books = [
        'java3',
        'laravel',
        'python'
    ];
    return view('contact')->withbooks($books);
});

Route::get('/projects', [ProjectController::class, 'index']);

//tasks
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{task}', [TaskController::class, 'show']);
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit']);
Route::put('/tasks/{task}', [TaskController::class, 'update']);
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
