<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    public function create($item_id){
        $user_id=Auth::id();
        Like::create([
            'user_id'=>$user_id,
            'item_id'=>$item_id,
        ]);
        return redirect('/');
    }

    public function destroy($item_id){
        Like::find($item_id)->delete();
        return redirect('/');
    }
}
