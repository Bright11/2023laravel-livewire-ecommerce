<?php

namespace App\Livewire\Frontend;

use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\Userservices;
use Illuminate\Support\Facades\Auth;

class Registerpage extends Component
{
    public $name;
    public $password;
    public $email;

    //
    protected $userservices;

    // public function __construct(Userservices $userservices)
    // {
    //     $this->userservices = $userservices;
    // }



    public function render()
    {
        return view('livewire.frontend.registerpage');
    }

    public function userregister(){
        //$url=User::where('url',Str::random(5))->first();

        $validated = $this->validate([
            'name' => 'required',
           'password'=>'required',
           'email'=>'required|unique:users|email',
           # 'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        //$siteurl=Str::random(10);
        User::where("siteurl", $siteurl=Str::random(10))->first();
        if($siteurl){
            User::where("siteurl", $siteurl=Str::random(11))->first();
        }
        $newuser=new User;
        $newuser->name=$this->name;
        $newuser->siteurl=$siteurl;
        $newuser->email=$this->email;
        $newuser->password=$this->password;
        $newuser->save();
        $this->reset();

        // $adduser=$this->Userservices->createuser($validated);
        // if($newuser)return redirect()->route('index');
        session()->flash('message', 'Registration was successful.');
    }



    public function resetdata(){
        $this->reset(['name',"password",'email']);
    }

}
