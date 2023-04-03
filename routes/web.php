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

Route::get('/', function() {

    $post_array = [
        
        [
            "title" => "postingan satu",
            "author" => "Ferlani",
            "slug" => "postingan-satu",
            "thumbnail" => "postingan_satu.jpg",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempora quae, nostrum sit unde consequatur hic et perspiciatis in explicabo distinctio amet magnam, voluptatum laudantium dolorem soluta! Corporis odio sequi ullam nisi sint eaque est et obcaecati veritatis. Inventore dicta numquam reiciendis tempora qui nostrum suscipit cumque, libero consectetur modi veritatis quibusdam officia!"
        ],

        [
            "title" => "postingan dua",
            "author" => "Ferlan",
            "slug" => "postingan-dua",
            "thumbnail" => "postingan_dua.png",
            "body" => "Lorem ipsum dolor sit libero consectetur modi veritatis voluptatibus sed vitae repudiandae excepturi sequi nesciunt ipsam deserunt exercitationem ut molestias enim consequuntur distinctio esse! Laboriosam consequatur provident adipisci earum, sequi distinctio sapiente nulla vero, ex aliquid omnis minus impedit temporibus enim vitae fuga eos recusandae quibusdam officia!"
        ],

        [
            "title" => "postingan tiga",
            "author" => "Ferlan Ferlani",
            "slug" => "postingan-tiga",
            "thumbnail" => "postingan_tiga.jpg",
            "body" => "Lorem ipsum dolor sit ametamet magnam, voluptatum laudantium dolorem soluta! Corporis odio sequi ullam nisi sint eaque est et obcaecati veritatis. Inventore dicta numquam reiciendis tempora qui nostrum suscipit cumque, libero consectetur modi veritatis voluptatibus seicia!"
        ]

    ];


    return view('home', [
        "title" => "Home",
        "posts" => $post_array
    ]);
});


Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "name" => "Ferlan Ferlani",
        "img" => "Ferlan Ferlani.jpeg",
        "status" => "Mahasiswa"
    ]);
});


Route::get('/post/{slug}/', function($slug) {

    $post_array = [

        [
            "title" => "postingan satu",
            "author" => "Ferlani",
            "slug" => "postingan-satu",
            "thumbnail" => "postingan_satu.jpg",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempora quae, nostrum sit unde consequatur hic et perspiciatis in explicabo distinctio amet magnam, voluptatum laudantium dolorem soluta! Corporis odio sequi ullam nisi sint eaque est et obcaecati veritatis. Inventore dicta numquam reiciendis tempora qui nostrum suscipit cumque, libero consectetur modi veritatis quibusdam officia!"
        ],

        [
            "title" => "postingan dua",
            "author" => "Ferlan",
            "slug" => "postingan-dua",
            "thumbnail" => "postingan_dua.png",
            "body" => "Lorem ipsum dolor sit libero consectetur modi veritatis voluptatibus sed vitae repudiandae excepturi sequi nesciunt ipsam deserunt exercitationem ut molestias enim consequuntur distinctio esse! Laboriosam consequatur provident adipisci earum, sequi distinctio sapiente nulla vero, ex aliquid omnis minus impedit temporibus enim vitae fuga eos recusandae quibusdam officia!"
        ],

        [
            "title" => "postingan tiga",
            "author" => "Ferlan Ferlani",
            "slug" => "postingan-tiga",
            "thumbnail" => "postingan_tiga.jpg",
            "body" => "Lorem ipsum dolor sit ametamet magnam, voluptatum laudantium dolorem soluta! Corporis odio sequi ullam nisi sint eaque est et obcaecati veritatis. Inventore dicta numquam reiciendis tempora qui nostrum suscipit cumque, libero consectetur modi veritatis voluptatibus seicia!"
        ]

    ];

    $new_post = [];
    foreach($post_array as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});