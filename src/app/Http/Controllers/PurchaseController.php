<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function index($item_id){
        return view('purchase');
    }

    public function purchase(Request $request){
        return redirect('/');
    }

    public function address($item_id){
        return view('address');
    }

    public function updateAddress(Request $request){
        return redirect('/');
    }
}
