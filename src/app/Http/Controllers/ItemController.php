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
use App\CategoryItem;

class ItemController extends Controller
{
    public function index(){
        $item=Item::all();
        if(Auth::check()){
            $likes=Auth::user()->likes()->with('item')->get();
        }
        return view('item_all');
    }

    public function detail(){
        // $items=Item::find($item_id);
        // $likes=Like::where('item_id', $item_id)->get();
        // $comments=Comment::where('item_id', $item_id)->get();
        return view('item_detail');
    }

    public function search(Request $request){
        $item=Item::KeyWordSearch($request->keyword)->get();
        return view('item_all');
    }

    public function sellView(){
        return view('sell');
    }

    public function sellCreate(ItemRequest $request){
        $image_file=$request->file('img');
        $filename=$image_file->getClientOriginalName();
        $image_path=$image_file->storeAs('public/image', $filename);
        //画像を保存するパスは"public/image/xxx.jpeg"
        $read_path = str_replace('public/', 'storage/', $image_path);
        // 画像のパスをデータベースに保存
        $user_id=Auth::id();
        $item=Item::create([
            'user_id'=>$user_id,
            'condition_id'=>$request->condition,
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'img_url'=>$read_path,
        ]);
        DB::table('category_item')->insert([
            'item_id' => $item->id,
            'category_id' => $request->category,
        ]);
        return redirect('/');
    }
}
