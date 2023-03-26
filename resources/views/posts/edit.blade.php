<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <head>
        <meta charset="utf-8">
        <title>Gameblog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>ゲーム攻略解説ブログ</h1>
       <form action="/posts/{{ $post->id }}" method="POST">
           @csrf
           @method('PUT')
           <div class="title",
               <h2>タイトル</h2>
               <input type="text" name=post[title] placeholder="ゲームタイトル" value={{ $post->title }}>
               <p class='title__error' style="color:red">{{ $errors->first('post.title') }} </p>
           </div>
           <div class="body">
               <h2>内容</h2>
               <textarea name="post[body]" placeholder="攻略内容">{{ $post->body }}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
           </div>
           <input type="submit" value="update">
       </form>
        <div class='footer'>
            <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>
