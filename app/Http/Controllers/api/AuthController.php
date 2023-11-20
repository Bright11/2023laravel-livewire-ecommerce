<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rules\Password;


class AuthController extends Controller
{
    //

    public function register(Request $req){
        $req->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>['required'],
        ]);
        $user=User::create([
            'name'=>$req->input('name'),
            'email'=>$req->input(strtolower('email')),
            'password'=>Hash::make($req->input('password'))
        ]);
        event(new Registered($user));
        $token= $user->createToken('authen');
        return response()->json([
            'message'=>'User created successfully',
            'data'=>['token'=>$token->plainTesxtToken,'user'=>$user]
        ]);
    }

    // login api

    public function login(Request $req){
        $validate=$req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user=Auth::attempt(['email'=>strtolower($req->email), 'password'=>$req->password]);
        if($user){
            session()->put('user',$user);
            session()->regenerateToken();
            return response()->json(
                [
                    'message'=>$user,
                ]
            );
        }
    }
}
