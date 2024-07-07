<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>もうちょい練る！</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- 外部CSSファイルのリンク -->
        <link rel="stylesheet" href="{{ asset('css/create.blade.css') }}">
    </head>
    <body class="antialiased">
        <div class="container"> <!-- 追加 --><!-- 追加 -->
       <h1>&#x1F35C; もうちょい練る！&#x1F35C;</h1>
       <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>コツ&#x1F4A1;</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value={{ $post->title }}>
                <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>詳しく！</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした">{{$post->body}}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="アプデ！">
        </form>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
