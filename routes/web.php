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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'nama' => 'lynn',
        'alamat' => 'entah',
        'title' => 'About',
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
    [
    "title" => "Judul Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => "Lynnn",
    "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Aspernatur ab impedit tempore labore doloribus qui praesentium consectetur 
    fugiat ipsam ratione perferendis, ducimus eos voluptate similique sed magnam? 
    Fugit sapiente possimus perferendis assumenda. Deleniti omnis autem architecto accusamus soluta,
     ut amet nesciunt quia ipsa. Veritatis asperiores ratione consequatur ipsam autem consequuntur 
     atque incidunt, nostrum adipisci? Necessitatibus eius numquam atque suscipit perferendis illo 
     incidunt distinctio cum nihil dolores possimus nemo, reprehenderit laborum minus praesentium 
     eum ab rem hic labore omnis ea saepe?"
    ],
     [
    "title" => "Judul Post kedua",
    "slug" => "judul-post-kedua",
    "author" => "Woke Bro",
    "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Aspernatur ab impedit tempore labore doloribus qui praesentium consectetur 
    fugiat ipsam ratione perferendis, ducimus eos voluptate similique sed magnam? 
    Fugit sapiente possimus perferendis assumenda. Deleniti omnis autem architecto accusamus soluta,
     ut amet nesciunt quia ipsa. Veritatis asperiores ratione consequatur ipsam autem consequuntur 
     atque incidunt, nostrum adipisci? Necessitatibus eius numquam atque suscipit perferendis illo 
     incidunt distinctio cum nihil dolores possimus nemo, reprehenderit laborum minus praesentium 
     eum ab rem hic labore omnis ea saepe?"
    ]
];
    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_posts,
    ]);
});

//halaman single posts
Route::get ('posts/{slug}',function($slug) {
     $blog_posts = [
    [
    "title" => "Judul Post Pertama",
    "slug" => "judul-post-pertama",
    "author" => "Lynnn",
    "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Aspernatur ab impedit tempore labore doloribus qui praesentium consectetur 
    fugiat ipsam ratione perferendis, ducimus eos voluptate similique sed magnam? 
    Fugit sapiente possimus perferendis assumenda. Deleniti omnis autem architecto accusamus soluta,
     ut amet nesciunt quia ipsa. Veritatis asperiores ratione consequatur ipsam autem consequuntur 
     atque incidunt, nostrum adipisci? Necessitatibus eius numquam atque suscipit perferendis illo 
     incidunt distinctio cum nihil dolores possimus nemo, reprehenderit laborum minus praesentium 
     eum ab rem hic labore omnis ea saepe?"
    ],
     [
    "title" => "Judul Post kedua",
    "slug" => "judul-post-kedua",
    "author" => "Woke Bro",
    "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Aspernatur ab impedit tempore labore doloribus qui praesentium consectetur 
    fugiat ipsam ratione perferendis, ducimus eos voluptate similique sed magnam? 
    Fugit sapiente possimus perferendis assumenda. Deleniti omnis autem architecto accusamus soluta,
     ut amet nesciunt quia ipsa. Veritatis asperiores ratione consequatur ipsam autem consequuntur 
     atque incidunt, nostrum adipisci? Necessitatibus eius numquam atque suscipit perferendis illo 
     incidunt distinctio cum nihil dolores possimus nemo, reprehenderit laborum minus praesentium 
     eum ab rem hic labore omnis ea saepe?"
    ]
];
    $new_post = [];
    foreach($blog_posts as $post)
    if ($post["slug"] == $slug) {
        $new_post = $post;
    }
    return view('post',[
        "title" => "single post",
        "post" =>$new_post
    ]);
});
// Route::get('/post', function () {
//     return view('post', [
//         'nama' => 'lynn',
//         'alamat' => 'entah',
//         'title' => 'About',
//     ]);
// });