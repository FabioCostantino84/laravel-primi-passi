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

    $info = [
        'title' => 'ABOUT',
        'name' => 'Fabio',
        'surname' => 'Costantino',
        'role' => 'Junior Full Stack Web Developer',
        'mission' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid aspernatur quis exercitationem reprehenderit. Excepturi, optio perspiciatis necessitatibus voluptas ex placeat iusto autem voluptates molestiae eveniet adipisci consectetur asperiores neque in? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid aspernatur quis exercitationem reprehenderit. Excepturi, optio perspiciatis necessitatibus voluptas ex placeat iusto autem voluptates molestiae eveniet adipisci consectetur asperiores neque in?',
    ];
    return view('about', $info);
});

Route::get('/contacts', function () {

    $title = 'CONTACTS';
    $name = 'Fabio';
    $surname = 'Costantino';
    $mail = 'fabiocostantino84@gmail.com';
    $cell = '328 1234567';
    return view('contacts', compact('title', 'name', 'surname', 'mail', 'cell'));
});
