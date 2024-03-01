<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        return view('posts', compact('posts'));
    }



    /*
    public function index(){
        $post = Post::find(2);
        dump($post->title);
        dump($post->image);
        dump($post->content);

        // Лайки из всех таблиц
        $posts = Post::all();
        foreach($posts as $post){
            dump($post->likes);
        }
        // Все таблицы
        dump( $posts);

        $posts = Post::where('is_published', 1)->get();
        foreach($posts as $post){
            dump('Только опубликованные id -  ' . $post->id);
        }
    }

//Добавление поста в базу
    public function create(){
        $postsArr = [
            [
                'title' => 'Заголовок поста',
                'content' => 'Здесь будет отобрадаться контент поста',
                'image' => 'lol.jpg',
                'likes' => 1489,
                'is_published' => 1,
            ],
            [
                'title' => ' Другой Заголовок поста',
                'content' => 'Другой Здесь будет отобрадаться контент поста',
                'image' => 'Другой https://sun9-43.userapi.com/impg/UlKF2y3iptF23Bh5-RyO4UdRhMQSUyWGJgjcKg/BwGFJuHWJWg.jpg?size=1280x1280&quality=95&sign=e2995664dc2186bb66cda241ff5db0da&type=album',
                'likes' => 666,
                'is_published' => 1,
            ]
            ];
            foreach($postsArr as $item){
                Post::create($item);
            }
            dd('created, hurra');
        }
        /*Post::create([
            'title' => 'Заголовок поста',
            'content' => 'Здесь будет отобрадаться контент поста',
            'image' => 'lol.jpg',
            'likes' => 1489,
            'is_published' => 1,
        ]);
        dd('created, hurra');
    }*/

/*
 //Обновление поста в базе
    public function update(){
        $post = Post::find(5);
        $post->update([
            'title' => 'Заголовок поста',
            'content' => 'Здесь будет отобрадаться контент поста',
            'image' => 'lol89.jpg',
            'likes' => 1489,
            'is_published' => 1,
        ]);
        dd('update, hurra');
    }


    //удаление из базы
    public function delete(){
        $post = Post::find(2);
        $post->delete();
        dump('deleted');
       
    }


    public function firstOrCreate(){
        //$post = Post::find(2);
        $anotherPost = [
            'title' => 'Так называемый заголовок поста',
            'content' => 'Так называемый заголовок контент поста',
            'image' => 'Другой https://sun9-43.userapi.com/impg/UlKF2y3iptF23Bh5-RyO4UdRhMQSUyWGJgjcKg/BwGFJuHWJWg.jpg?size=1280x1280&quality=95&sign=e2995664dc2186bb66cda241ff5db0da&type=album',
            'likes' => 666,
            'is_published' => 1,
        ];
        $post = Post::firstOrCreate([
            'title' => 'Так называемый заголовок поста'
        ],
        [
            'title' => 'Так называемый заголовок поста',
            'content' => 'Так называемый заголовок контент поста',
            'image' => 'Другой https://sun9-43.userapi.com/impg/UlKF2y3iptF23Bh5-RyO4UdRhMQSUyWGJgjcKg/BwGFJuHWJWg.jpg?size=1280x1280&quality=95&sign=e2995664dc2186bb66cda241ff5db0da&type=album',
            'likes' => 666,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd($post);
    }


    public function updateOrCreate(){

        $post = Post::updateOrCreate([
            'content' => 'Такого нема, иди нахуй'
        ],
        [
            'title' => 'Так называемый заголовок поста',
            'content' => 'Такого нема, иди нахуй',
            'image' => 'all good',
            'likes' => 666,
            'is_published' => 1,
        ]);
        dump($post->image);
    //Так как заголовки одинаковый(то есть этот заголовок есть) он редактирует; если нет то создает новый
    }
*/
}
