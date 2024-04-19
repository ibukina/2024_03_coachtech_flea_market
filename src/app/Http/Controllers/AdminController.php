<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shop;

class AdminController extends Controller
{
    public function index(){
        $users=User::where('role_id', "10")->paginate(10);
        $shops=Shop::with('user.items')->paginate(5);
        return view('admin', compact('users', 'shops'));
    }

    public function destroy($user_id){
        User::find($user_id)->delete();
        return redirect('/admin');
    }
}
