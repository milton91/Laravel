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
    return view('Home', [
        "title" => "home"]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "about",
        "name" => "Milton Juan Dermawan",
        "email" => "milton@mail.gov",
        "image" => "image1.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "My First Post",
            "slug" => "my-first-post",
            "author" => "Milton",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime corporis commodi voluptatum illo obcaecati quisquam praesentium harum recusandae esse libero, temporibus quod sunt ea molestias minima reprehenderit dolore sit. Expedita."
        ],
        [
            "title" => "My Second Post",
            "slug" => "my-second-post",
            "author" => "Milton",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime corporis commodi voluptatum illo obcaecati quisquam praesentium harum recusandae esse libero, temporibus quod sunt ea molestias minima reprehenderit dolore sit. Expedita."
        ]
    ];
    return view('Blog', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "My First Post",
            "slug" => "my-first-post",
            "author" => "Milton",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime corporis commodi voluptatum illo obcaecati quisquam praesentium harum recusandae esse libero, temporibus quod sunt ea molestias minima reprehenderit dolore sit. Expedita."
        ],
        [
            "title" => "My Second Post",
            "slug" => "my-second-post",
            "author" => "Milton",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime corporis commodi voluptatum illo obcaecati quisquam praesentium harum recusandae esse libero, temporibus quod sunt ea molestias minima reprehenderit dolore sit. Expedita."
        ]
    ];

    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "post",
        "post" => $new_post
    ]);
});