<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
        $users = User::all();
        return view('users.home',['users' => $users]);
    }

    function files(){
        dd('Myfiles Working');
    }

    function UserDetails(){
        $user = Auth::user();
        $users = User::with('role')->get();
        return view('users.list',compact('users'));
    }

    function delete($id){
        $user= User::find($id);
        $user->delete();
        return ['status'=>'success', 'message'=> 'User Successfully Deleted'];

    }
}
