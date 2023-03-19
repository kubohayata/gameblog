<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Gameblog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>ゲーム攻略ブログ</h1>
       <form action="/posts" method="POST">
           @csrf
           <div class="title",
               <h2>Title</h2>
               <input type="text" name=post[title] placeholder="ゲームタイトル">
           </div>
           <div class="body">
               <h2>body</h2>
               <textarea name="post[body]" placeholder="攻略内容"></textarea>
           </div>
           <input type="submit" value="投稿">
       </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
