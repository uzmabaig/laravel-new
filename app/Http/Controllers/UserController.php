<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        
        if($request->method() === 'POST'){
        $user = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            ]);
           

        if($user){
            return redirect()->route('login');
        }
    }
}

public function login(Request $request){
        
    if($request->method() === 'POST'){
    $user = $request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);

    if(Auth::attempt($user)){
        return redirect()->route('welcome');
    }
}
}
}
