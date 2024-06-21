<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>タブ付きレイアウト</title>
        <link rel="stylesheet" href="css/styles.css">
        <title>Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <x-app-layout>
    <body>
    <div class="container">
        <div class="sidebar">
            <div class="tab" onclick="showContent('timeline')">タイムライン</div>
            <div class="tab" onclick="showContent('visual')">visual</div>
            <div class="tab" onclick="showContent('mm')">MM</div>
            <div class="tab" onclick="showContent('groove')">groove</div>
            <div class="tab" onclick="showContent('onatsu')">音圧</div>
            <div class="tab" onclick="showContent('onsyoku')">音色</div>
            <div class="tab" onclick="showContent('onka')">音価</div>
            <div class="tab" onclick="showContent('tempokan')">テンポ感</div>
            <div class="tab" onclick="showContent('mental')">メンタル</div>
            <div class="tab" onclick="showContent('management')">マネジメント</div>
            <div class="tab" onclick="showContent('form')">フォーム</div>
            <div class="tab" onclick="showContent('chops')">チョップス</div>
            <div class="tab" onclick="showContent('listining')">リスニング</div>
            <div class="tab" onclick="showContent('url')">URL</div>
            <div class="tab" onclick="showContent('daturyoku')">脱力</div>
            <div class="tab" onclick="showContent('chiebukuro')">知恵袋</div>
        </div>
        <div class="content">
            <div id="timeline" class="content-item active">
                <h1>タイムライン</h1>
              <h1>コツを教えて！</h1>
             <a href='/posts/create'>コツを教える</a>
             <div class='posts'>
                    @foreach($posts as $post)
                    <div class='post'>
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                        <p class='body'>{{ $post->body }}</p>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                        </form>
                    </div>
                    @endforeach
                </div>
                <div class='paginate'>{{ $posts->links() }}</div>
               </div>
             </div>
            <div id="visual" class="content-item">
                <h1></h1>
                <p>ここにプロフィールの内容が表示されます。</p>
            </div>
            <div id="mm" class="content-item">
                <h1>設定</h1>
                <p>ここに設定の内容が表示されます。</p>
                
            </div>
        </div>
    </div>
    <script src="js/home.script.js"></script>
</body>
    <body class="antialiased">
        <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('削除すると復元できません.\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
    </x-app-layout>
</html>
