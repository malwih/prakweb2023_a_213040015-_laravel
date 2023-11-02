<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Malwi Hidayat",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quisquam illo totam error unde eveniet cupiditate minus suscipit. Cupiditate nulla esse fugit alias illo. Quas suscipit, cumque nulla et ipsum blanditiis voluptatem odit! Voluptas nisi harum, voluptatem asperiores blanditiis dolorum, incidunt soluta est neque esse totam! Natus dolore reiciendis quibusdam, aliquid debitis, velit molestiae ad, autem dicta laborum mollitia? Iste."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fauzi Ilyas",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quisquam illo totam error unde eveniet cupiditate minus suscipit. Cupiditate nulla esse fugit alias illo. Quas suscipit, cumque nulla et ipsum blanditiis voluptatem odit! Voluptas nisi harum, voluptatem asperiores blanditiis dolorum, incidunt soluta est neque esse totam! Natus dolore reiciendis quibusdam, aliquid debitis, velit molestiae ad, autem dicta laborum mollitia? Iste."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
