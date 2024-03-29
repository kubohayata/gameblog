<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <body class="antialiased">
        <h1>ゲーム攻略解説ブログ</h1>
       <form action="/posts" method="POST">
           @csrf
           <div class="title",
               <h2>タイトル</h2>
               <input type="text" name=post[title] placeholder="ゲームタイトル" value={{ old('post.title' )}}>
               <p class='title__error' style="color:red">{{ $errors->first('post.title') }} </p>
           </div>
           <div class="body">
               <h2>内容</h2>
               <textarea name="post[body]" placeholder="攻略内容">{{old('post.body')}}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
           </div>
           <input type="submit" value="投稿">
       </form>
        <div class='footer'>
            <a href="/posts">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>
