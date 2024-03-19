<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\CategoryItem;
use App\Models\Condition;
use App\Models\SoldItem;

class ItemController extends Controller
{
    public function index(){
        return view('item_all');
    }

    public function detail(){
        return view('item_detail');
    }

    public function sellView(){
        return view('sell');
    }

    public function sellCreate(Request $request){
        return redirect('/');
    }
}
