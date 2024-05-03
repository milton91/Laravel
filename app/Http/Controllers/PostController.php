<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('Blog', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "post",
            "post" => Post::find($slug)
        ]);
    }
}
