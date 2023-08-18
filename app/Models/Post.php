<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ilham Julian Efendi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus repudiandae quod accusamus illum dolores recusandae tenetur aperiam molestias officia, voluptatibus, mollitia consectetur minima magni suscipit minus est facere qui.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rama Efendi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus repudiandae quod accusamus illum dolores recusandae tenetur aperiam molestias officia, voluptatibus, mollitia consectetur minima magni suscipit minus est facere qui.",
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Agista Efendi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus repudiandae quod accusamus illum dolores recusandae tenetur aperiam molestias officia, voluptatibus, mollitia consectetur minima magni suscipit minus est facere qui.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = self::all();
        return $posts->firstWhere('slug', $slug);
    }
}
