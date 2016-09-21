<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index(){
        $user = Auth::user();
        $users = User::with('role')->get();
        return view('users.index', compact('users'));
    }

    function create(){
        $roles = Role::all();
        return view('users.create',compact('roles'));
    }

    function save(Request $request){
        User::create($request->all());
        return redirect()->back();
    }

    function login(Request $request){
    if(Auth::attempt($request->only('username','password'))){

        return redirect()->intended(route('home'));
    }
    return redirect()->route('login')->with('message','<div class="alert alert-danger">Sorry!! Email or Password did not match..  </div>');
    }


    function logout(){

        Auth::logout();
        return redirect()->route('login');
    }

}
