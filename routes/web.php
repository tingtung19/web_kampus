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
    return view('home', [
            'page' => 'Home',
            'title'=> 'home'                    
            ]);
});

Route::get('/profile', function () {
    return view('profile', [
            'page' => 'Profile',
            'title'=> 'profile'   
        ]);
});

Route::get('/about', function () {
    return view('about', [
        'page' => 'About',
        'title'=> 'about'
      ]);
});

Route::get('/contact-us', function () {
    return view('contact-us', [
        'page' => 'Contact Us',
        'title'=> 'contact'   
    ]);
});

Route::get('/galery', function () {
    return view('galery', [
        'page' => 'Galery',
        'title'=> 'galery'   
    ]);
});

Route::get('/faculty', function () {
    return view('faculty', [
        'page' => 'Faculty',
        'title'=> 'faculty'   
    ]);
});

Route::get('/blog', function () {
    $blog_post=[
        [
            "title" => "Judul Blog Pertama",
            "author" => "Administrator",
            "news"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolores eligendi exercitationem rerum harum, nulla consequatur, tenetur vitae porro placeat esse totam excepturi quod ratione odit cupiditate dicta consequuntur cum!"
        ],
        [
            "title" => "Judul Blog Kedua",
            "author" => "Administrator",
            "news"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolores eligendi exercitationem rerum harum, nulla consequatur, tenetur vitae porro placeat esse totam excepturi quod ratione odit cupiditate dicta consequuntur cum!"
        ],
        [
            "title" => "Judul Blog Ketiga",
            "author" => "Administrator",
            "news"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolores eligendi exercitationem rerum harum, nulla consequatur, tenetur vitae porro placeat esse totam excepturi quod ratione odit cupiditate dicta consequuntur cum!"
        ],
        [
            "title" => "Judul Blog Keempat",
            "author" => "Administrator",
            "news"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolores eligendi exercitationem rerum harum, nulla consequatur, tenetur vitae porro placeat esse totam excepturi quod ratione odit cupiditate dicta consequuntur cum!"
        ],
        [
            "title" => "Judul Blog Kelima",
            "author" => "Administrator",
            "news"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolores eligendi exercitationem rerum harum, nulla consequatur, tenetur vitae porro placeat esse totam excepturi quod ratione odit cupiditate dicta consequuntur cum!"
        ],
    
    ];

    
    return view('blog', [
        'page' => 'News',
        'title'=> 'blog' ,
        'blogs' => $blog_post 
    ]);
});
