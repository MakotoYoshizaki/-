<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Chat;
use App\Models\Room;
use App\Models\Message;
use App\Models\User;
use App\Models\Post;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller {
    public function openChat(Post $post)
    {
        // 自分と相手のIDを取得
        $myUserId = auth()->user()->id;
        $otherUserId = $post->user_id;// ここで相手のユーザーIDを指定
        $postId = $post->id;
        // データベース内でチャットが存在するかを確認
        $chat = Room::where(function($query) use ($myUserId, $otherUserId) {
            $query->where('owner_id', $myUserId)
                ->where('guest_id', $otherUserId);
        })->orWhere(function($query) use ($myUserId, $otherUserId) {
            $query->where('owner_id', $otherUserId)
                ->where('guest_id', $myUserId);
        })->first();

        // チャットが存在しない場合、新しいチャットを作成
        if (!$chat) {
            $chat = new Room();
            $chat->owner_id = $otherUserId;
            $chat->guest_id = $myUserId; 
            $chat->save();
        }

        $chats = Room::where('owner_id',$otherUserId)->get();
        $chats_id = array();
        foreach($chats as $val){
            array_push($chats_id, $val->id);
        }
        // $messages = Message::where('chat_id', $chat->id)->orderBy('updated_at', 'DESC')->get();
        // $messages = Message::whereIn('chat_id', $chats_id)->orderBy('updated_at', 'DESC')->get();
        $messages = Message::where('posts_id', $postId)->get();

        return view('chats.chat')->with(['chat' => $chat, 'messages' => $messages, 'post' => $post]);
        
        // return view('chats.test');
    }
    
    public function sendMessage(Message $message, Request $request, Post $post)
    {
        // auth()->user() : 現在認証しているユーザーを取得
        $user = Auth::user();
        $strUserId = $user->id;
        $strUsername = $user->name;

        // リクエストからデータの取り出し
        $strMessage = $request->input('message');
        $postId = $request->input('post_id');
        
        // メッセージオブジェクトの作成
        $chat = new Chat;
        $chat->body = $strMessage;
        $chat->chat_id = $request->input('chat_id');
        $chat->userName = $strUsername;
        MessageSent::dispatch($chat);    

        //データベースへの保存処理
        $message->user_id = $strUserId;
        $message->body = $strMessage;
        $message->chat_id = $request->input('chat_id');
        $message->posts_id = $postId;
        $message->save();
        return response()->json(['message' => 'Message sent successfully']);
    }
}