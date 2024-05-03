<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
