<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

// use Illuminate\Support\Facades\Request as FacadesRequest;

class PostController extends Controller
{


    public function regisetrpage(){
        // return view('register.users');
        return view('register.users');
    }



    public function index(){
        return view("frontend.index");
    }

}
