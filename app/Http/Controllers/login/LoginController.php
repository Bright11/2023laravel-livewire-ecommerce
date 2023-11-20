<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Request;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function login(Request $req){
        $validate=$req->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
        );
       if( $user=Auth::attempt(['email'=>strtolower($req->input('email')),'password'=>$req->input('password'),'isAdmin' => 0])){
        $req->session()->put('user', $user);
        $req->session()->put('user', $user);
        return redirect()->route('index');

       }elseif($admin=Auth::attempt(['email'=>strtolower($req->input('email')),'password'=>$req->input('password'),'isAdmin' => 1])){
        $req->session()->put('admin', $admin);
            return redirect()->route('dasboard');
       }else{
        return redirect()->back();
       }




    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        return redirect('/');
    }
}
