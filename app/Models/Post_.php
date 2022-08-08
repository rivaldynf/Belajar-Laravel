<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Judul Post Pertama",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam asperiores dolores non impedit nisi, laudantium suscipit eius illum illo fugit voluptatum commodi assumenda placeat at vel quaerat sit quos, iure tempora esse sunt hic natus itaque amet? Quo molestiae alias ipsum voluptatum in cumque aperiam consectetur eaque nemo sunt quos aut repellat cupiditate laudantium, fuga, odit optio corrupti distinctio sit atque non id. Autem nemo consectetur velit maxime, incidunt quos hic architecto non reprehenderit harum a ducimus omnis eligendi corrupti!"
        ],
        
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Judul Post Kedua",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum commodi suscipit voluptatem aspernatur iure, tempora nihil reiciendis totam illo amet ab magnam mollitia architecto voluptates aut aperiam delectus assumenda aliquam quia iusto obcaecati facilis repellat. Eveniet magnam quibusdam necessitatibus quisquam assumenda nam itaque vero nulla, atque aperiam aliquid eius, illum maiores asperiores similique voluptatum reprehenderit numquam dolor aliquam dolore hic expedita incidunt tenetur voluptatibus. Accusamus illo officia repudiandae provident animi reiciendis dolorem quasi maxime nostrum, hic consequuntur et sed sit architecto nihil amet eveniet eius veniam tempore vitae aliquid porro nesciunt? Maxime corporis provident nihil numquam, omnis nisi. Omnis, dolores."
        ]
 
    ];


    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
