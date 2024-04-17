<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $users=User::where('role_id', "10")->paginate(10);
        return view('admin', compact('users'));
    }

    public function destroy($user_id){
        User::find($user_id)->delete();
        return redirect('/admin');
    }
}
