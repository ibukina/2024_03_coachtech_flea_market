<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
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
