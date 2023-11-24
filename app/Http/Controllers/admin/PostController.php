<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Request as FacadesRequest;

class PostController extends Controller
{


    public function regisetrpage(){
        // return view('register.users');
        return view('register.users');
    }


    public function index(){
       // $procat=Category::all();


        return view("frontend.index");
    }

    public function dashboard(){
        return view("admin.home");
    }
    public function addcategory(){
        return view('admin.addcategory');
    }

    public function cartpage(){
        if(!Auth::user())return redirect()->route('regisetrpage');
        return view('frontend.cartpage');
    }

}
