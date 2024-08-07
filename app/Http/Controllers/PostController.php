<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->getPaginateByLimit(5);
        // $categories = Category::all // カテゴリーの一覧を取得
        // $categories = Category::with('posts')->get(); // カテゴリーとその投稿を取得
        return view('posts.index')->with(['posts' => $posts]);
    }
    
     public function show(Post $post)
     {
        return view('posts.show')->with(['post' => $post]);
     }
     
     public function create(Category $category)
     {
         return view('posts.create')->with(['categories' => $category->get()]);
     }
   
     public function store(PostRequest $request, Post $post)
     {   
         $input = $request['post'];
         $input['user_id']=Auth::id();
         $post->fill($input)->save();
         return redirect('/');
     }
     public function edit(Post $post)
     {
         return view('posts.edit')->with(['post' => $post]);
     }
     
     public function update(PostRequest $request, Post $post)
     {
         $input = $request['post'];
         $input['user_id']=Auth::id();
         $post->fill($input)->save();
         return redirect('/');
     }
     
     public function delete(Post $post)
     {
         $post->delete();
         return redirect('/');
     }
      public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('body', 'LIKE', "%{$query}%")
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }
    
    public static function convertUrlsToLinks($content)
    {
        $urlPattern = '/(https?:\/\/[^\s]+)/';
        $replacePattern = '<a href="$1" target="_blank" rel="noopener noreferrer">$1</a>';

        return preg_replace($urlPattern, $replacePattern, e($content));
    }
    
}
