<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AddproductService;
// use Illuminate\Support\Facades\Request as FacadesRequest;

class PostController extends Controller
{
    //
    protected $addproductService;


    public function __construct(AddproductService $addproductService)

    {
        $this->addproductService=$addproductService;
    }

    public function regisetrpage(){
        // return view('register.users');
        return view('register.users');
    }

    public function register(Request $req){

        $validated = $req->validate([
            'username' => 'required|unique:products',
           'password'=>'required',
           # 'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $product=$this->addproductService->addproduct($req);
        if($product)return redirect()->back();
    }


    public function index(){
        return view("frontend.index");
    }

}
