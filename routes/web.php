<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
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
Route::get('/', [HomeController::class, 'index1']);

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

Route::get('/projects', [ProjectController::class, 'index1']);
