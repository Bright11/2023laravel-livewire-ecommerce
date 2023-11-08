<?php
namespace App\Services;

use App\Models\User;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class Userservices{
    public function createuser($data){

        // return User::create([
        //     'name'=>$req->input("username"),
        //     'email'=>$req->input("email"),
        //     'password'=>$req->input("password")
        // ]);
        return User::create($data);
    }
}
