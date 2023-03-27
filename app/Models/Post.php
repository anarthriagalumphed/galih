<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    static $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Galih Mahendra Putra",
            "body" =>   "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel maiores dolor eos quis. Consectetur optio sequi dolorum
            fugiat perspiciatis eum rerum incidunt placeat, voluptatum quod natus at eos, reprehenderit provident voluptatibus error
            maxime nobis praesentium repellat fuga ratione excepturi voluptate, minus earum. Repellat doloribus harum repudiandae
            iste id quae at magni corrupti sunt laboriosam ea ex asperiores nesciunt impedit, optio natus dolorum, cum facilis?
            Autem minus neque hic sunt adipisci dignissimos quod quisquam odio quidem sit odit, omnis excepturi quae ipsa nulla,
            tempora reprehenderit. Aspernatur vitae cupiditate ipsum laboriosam alias at dolore non odit, eaque officia, ex eligendi
            iusto reprehenderit."
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Galih Mahendra",
            "body" =>   "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis sit itaque tempore temporibus, mollitia porro eveniet ad
            dolore iure cumque sequi reiciendis harum? Doloremque aspernatur, dicta quibusdam provident delectus nostrum architecto
            pariatur assumenda in dolor, commodi porro. Eaque, reprehenderit? Natus, optio totam dolore quaerat, autem officia,
            tempora architecto rerum cupiditate delectus ex? Quam labore numquam commodi vitae? Natus magni accusamus velit ex saepe
            pariatur molestiae qui eveniet. Nesciunt error mollitia blanditiis, molestiae quo non sequi nostrum repudiandae quisquam
            delectus repellendus optio ex. Assumenda sequi quos dignissimos cumque consectetur repudiandae? Sint tempora excepturi
            ea sed dolorem incidunt, distinctio omnis assumenda unde, optio molestiae odit ipsam quia necessitatibus ex officia!
            Dignissimos tempore nam aut amet rerum! In, est autem provident inventore, quos, voluptate temporibus enim iusto
            repellendus quae sapiente culpa ipsum architecto officia tempore sint minima cupiditate fugit amet magnam quasi
            doloribus fuga? Ex, animi voluptate velit placeat nulla fugiat non assumenda nobis aperiam, deleniti blanditiis. Vero
            consequatur voluptate numquam sunt hic vel culpa suscipit unde. Sunt error est ipsa adipisci et quidem dolores,
            perspiciatis reprehenderit similique quae sapiente doloremque at blanditiis ratione sequi possimus facere totam ut
            deserunt assumenda recusandae iusto saepe minus. Nam sunt maiores suscipit iure, rem enim ipsa!"
        ]


    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        // code lebih simpel

        return $posts->firstWhere('slug', $slug);
    }
}
