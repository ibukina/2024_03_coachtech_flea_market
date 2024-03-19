<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Like;

class LikeController extends Controller
{
    public function create($item_id){
        return redirect('/');
    }

    public function destroy($item_id){
        return redirect('/');
    }
}
