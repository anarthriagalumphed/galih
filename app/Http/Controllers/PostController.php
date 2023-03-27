<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "post" => Post::all()
        ]);
    }




    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post

            // kode ditas ini($post digunakan untuķ
            // menyederhanakan kode dibawah)

            // Post::find($id)
        ]);
    }
}
