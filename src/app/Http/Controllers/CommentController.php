<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Item;
use App\Models\Like;

class CommentController extends Controller
{
    public function index($item_id){
        $item=Item::find($item_id);
        $comments=Comment::where('item_id', $item_id)->get();
        $likes=Like::where('item_id', $item_id)->get();
        $liked=Auth::user()->likes()->get();
        $liked=$liked->keyBy('item_id');
        return view('comment', compact('item', 'comments', 'liked', 'likes'));
    }

    public function create(CommentRequest $request, $item_id){
        $user_id=Auth::id();
        Comment::create([
            'user_id'=>$user_id,
            'item_id'=>$item_id,
            'comment'=>$request['comment'],
        ]);
        return redirect('/');
    }
}
