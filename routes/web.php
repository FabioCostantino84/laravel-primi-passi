<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $message = 'Hello Laravel 10';
    $name = 'Fabio';
    return view('home', compact('message', 'name'));
});

Route::get('/about', function () {

    $info =[
    'title' => 'ABOUT' 
    ];

    
    return view('about', $info);
});
