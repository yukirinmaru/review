<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * バリデーション、登録データの整形など
     */
    public function store(CommentRequest $request)
    {
        $savedata = [
            'comic_id' => $request->comic_id,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ];
 
        $comment = new Comment;
        $comment->fill($savedata)->save();
 
        // return redirect()->route('comics.show', [$savedata['comic_id']])->with('commentstatus','コメントを投稿しました');
    
        return redirect('/comics/' . $comment->comic_id)->with('commentstatus','コメントを投稿しました');
    }
    
}
