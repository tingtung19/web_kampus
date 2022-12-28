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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['page' => 'Home']);
});

Route::get('/profile', function () {
    return view('profile', ['page' => 'Profile']);
});

Route::get('/about', function () {
    return view('about', ['page' => 'About']);
});

Route::get('/contact-us', function () {
    return view('contact-us', ['page' => 'Contact Us']);
});

Route::get('/galery', function () {
    return view('galery', ['page' => 'Galery']);
});
