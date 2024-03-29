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
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class='content_post'>
                <h3>内容</h3>
                <p class='body'>{{ $post->body }}</p>
            </div>
        </div>
        <div class='edit'>
            <a href="/posts/{{ $post->id }}/edit">編集</a>
        </div>
        <div class='footer'>
            <a href="/posts">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>
