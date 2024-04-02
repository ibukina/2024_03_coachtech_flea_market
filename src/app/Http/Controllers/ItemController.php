<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ItemRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Condition;
use App\Models\Category;

class ItemController extends Controller
{
    public function index(){
        $items=Item::all();
        $user_id=Auth::id();
        $likes=Like::where('user_id', $user_id)->with('items')->get();
        return view('item_all', compact('items'));
    }

    public function detail($item_id){
        $item=Item::find($item_id);
        $likes=Like::where('item_id', $item_id)->get();
        $comments=Comment::where('item_id', $item_id)->get();
        return view('item_detail', compact('item', 'likes', 'comments'));
    }

    public function search(Request $request){
        $items=Item::KeyWordSearch($request->keyword)->get();
        return view('item_all', compact('items'));
    }

    public function sellView(){
        $conditions=Condition::all();
        $categories=Category::all();
        return view('sell', compact('conditions', 'categories'));
    }

    public function sellCreate(ItemRequest $request){
        $image_file=$request->file('store_image');
        $filename=$image_file->getClientOriginalName();
        $image_path=$image_file->storeAs('public/image', $filename);
        //画像を保存するパスは"public/image/xxx.jpeg"
        $read_path = str_replace('public/', 'storage/', $image_path);
        // 画像のパスをデータベースに保存
        $user_id=Auth::id();
        $item=Item::create([
            'user_id'=>$user_id,
            'condition_id'=>$request->condition_id,
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'img_url'=>$read_path,
        ]);
        DB::table('category_item')->insert([
            'item_id' => $item->id,
            'category_id' => $request->category_id,
        ]);
        return redirect('/');
    }
}
