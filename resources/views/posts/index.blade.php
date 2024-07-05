<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weme</title>
        <link rel="stylesheet" href="css/styles.css">
        <title>コツを教えて！</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <x-app-layout>
    <body>
        <header>
            <div class="logo-container">
                <img src="/img/Weme_logo.jpg"  class="logo">
            </div>
            <form action="{{ route('posts.search') }}" method="GET">
                <div class="search-container">
                    <input type="text" name="query" class="search-input" placeholder="&#x1F4A1;コツを探す&#x1F4A1;" value="{{ request()->input('query') }}">
                    <button type="submit" class="search-button" >検索！</button>
                </div>
            </form>
        </header>  
   　 <hr>
    <div class="container">
        <div class="sidebar">
            <div class="tab" onclick="showAllcontent()">タイムライン</div>
            <div class="tab" onclick="showTagcontent('2')">visual</div>
            <div class="tab" onclick="showTagcontent('3')">MM</div>
            <div class="tab" onclick="showTagcontent('4')">groove</div>
            <div class="tab" onclick="showTagcontent('5')">音圧</div>
            <div class="tab" onclick="showTagcontent('6')">音色</div>
            <div class="tab" onclick="showTagcontent('7')">音価</div>
            <div class="tab" onclick="showTagcontent('8')">テンポ感</div>
            <div class="tab" onclick="showTagcontent('9')">メンタル</div>
            <div class="tab" onclick="showTagcontent('10')">マネジメント</div>
            <div class="tab" onclick="showTagcontent('11')">フォーム</div>
            <div class="tab" onclick="showTagcontent('12')">チョップス</div>
            <div class="tab" onclick="showTagcontent('13')">リスニング</div>
            <div class="tab" onclick="showTagcontent('14')">URL</div>
            <div class="tab" onclick="showTagcontent('15')">脱力</div>
            <div class="tab" onclick="showTagcontent('16')">知恵袋</div>
        </div>
        
       

        <div class="content">
            
            
            
            <div id="timeline" class="content-item active">
                <h1>タイムライン</h1>
              <h1>コツを教えて！</h1>
             <a href='/posts/create'>コツを教える</a>
             <div class='posts' id="content">
                    @foreach($posts as $post)
                    <div class='post' id="{{ $post->category->id }}">
                   
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                        <p class='body'>{{ $post->body }}</p>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="submit-button" onclick="deletePost({{ $post->id }})"> &#x1F5D1; </button>
                        </form>
                         <a href="/posts/{{ $post->id }}/edit" class="edit-link">&#x1F58A;</a>
                        @if($post->user != Auth::user())
                            <a href="/chat/1">{{ $post->user->name }}とチャットする</a>  <!-- リンク直す -->
                        @endif
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
    <script src="{{asset('js/home.script.js')}}"></script>

    <div class="antialiased">
        <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('削除すると復元できません.\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        </div>
    </body>
    </x-app-layout>
</html>
