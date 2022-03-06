<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index1(){
        $books = [
            'java1',
            'laravel',
            'python'
        ];
        return view('welcome', [
            'books' => $books
        ]);
    }
}
