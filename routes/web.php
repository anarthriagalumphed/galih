<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
// use App\Models\Post;



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
    return view(
        'home',
        ["title" => "Home"]

    );
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Galih Mahendra Putra",
        "email" => "galihmahendrastudio.gmail.com",
        "image" => "img/pp.png"
    ]);
});





Route::get(
    '/blog',
    [PostController::class, 'index']
    // function () {

    //     // return view('blog', [
    //     //     "title" => "Blog",
    //     //     "post" => Post::all()
    //     // ]);
    // }

);



//halaman single post//

Route::get(
    'blog/{post:slug}',
    // lebih simple
    [
        PostController::class, 'show'
    ]

    // function ($slug) {
    //     [];


    //     // $new_post = [];
    //     // foreach ($blog_post as $post) {
    //     //     if ($post["slug"] === $slug) {
    //     //         $new_post = $post;
    //     //     }
    //     // }
    //     // return view('post', [
    //     //     "title" => "Single Post",
    //     //     "post" => Post::find($slug)
    //     // ]);
    // }

);
