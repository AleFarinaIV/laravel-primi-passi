<?php

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

Route::get('/', function () {

    $message = "This is our Homepage!";

    return view('home', compact('message'));
})->name("homepage");

Route::get('/about', function () { // path della get -> nome della component

    $message = 'This is About section!';

    return view('about', compact('message')); // function view -> nome della component
})->name('about'); // function name -> nome che preferisci

Route::get('/contact', function () {

    $message = 'This is Contact section!';

    return view('contact', compact('message'));
})->name('contact');