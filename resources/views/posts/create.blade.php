<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コツをシェアしよう！！</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       <!-- 外部CSSファイルのリンク -->
        <link rel="stylesheet" href="{{ asset('css/create.blade.css') }}">
    </head>
    <body class="antialiased">
    　<div class="container"> <!-- 追加 --><!-- 追加 -->
       <h1>&#x1F4A1;コツをシェアしよう！&#x1F4A1;</h1>
       <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>コツ&#x1F4A1;</h2>
                <input type="text" name="post[title]" placeholder="心拍数をあげるには！" value="{{ old('post.title')}}">
                <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>詳しく！</h2>
                <textarea name="post[body]" placeholder="呼吸をあえて浅くすると良い！">{{old('post.body')}}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="category">
                <h3>カテゴリー</h3>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="シェア！">
        </form>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
