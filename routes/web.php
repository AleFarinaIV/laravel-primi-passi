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
    $who_are_message = "Thats's who we are!";
    $about_array = [
        [
            'img_path' => 'https://picsum.photos/600/300',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Quod ipsa, maxime commodi possimus sapiente veritatis, fugiat obcaecati, 
                                doloribus blanditiis eligendi minima deleniti non ullam consequuntur hic 
                                voluptas omnis optio totam?'
        ],
        [
            'img_path' => 'https://picsum.photos/id/2/600/300',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Quod ipsa, maxime commodi possimus sapiente veritatis, fugiat obcaecati, 
                                doloribus blanditiis eligendi minima deleniti non ullam consequuntur hic 
                                voluptas omnis optio totam?'
        ]
    ];

    return view('about', compact('message', 'who_are_message', 'about_array')); // function view -> nome della component
})->name('about'); // function name -> nome che preferisci

Route::get('/contact', function () {

    $message = 'This is Contact section!';
    $could_contact_message = 'If you want to contact us:';
    $contact_array = [
        [
            'name' => 'Contact-1',
            'phone' => '+39 0123456789',
            'email' => 'info@example.com',
            'address' => 'Via delle Pietre, 123'
        ],
        [
            'name' => 'Contact-2',
            'phone' => '+39 0987654321',
            'email' => 'support@example.com',
            'address' => 'Via del Sole, 456'
        ],
        [
            'name' => 'Contact-3',
            'phone' => '+39 1234567890',
            'email' => 'admin@example.com',
            'address' => "Via dell'Amore, 789"
        ],
        [
            'name' => 'Contact-4',
            'phone' => '+39 2345678901',
            'email' => 'news@example.com',
            'address' => 'Via della Natura, 987'
        ]
    ];

    return view('contact', compact('message', 'could_contact_message', 'contact_array'));
})->name('contact');
