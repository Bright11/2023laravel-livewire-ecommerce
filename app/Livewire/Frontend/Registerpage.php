<?php

namespace App\Livewire\Frontend;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\Userservices;

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

    public function register(){

        $validated = $this->validate([
            'name' => 'required|unique:users',
           'password'=>'required',
           'email'=>'required|unique:users|email'
           # 'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $newuser=new User;
        $newuser->name=$this->name;
        $newuser->email=$this->email;
        $newuser->password=$this->password;
        $newuser->save();
        $this->reset();

        // $adduser=$this->Userservices->createuser($validated);
         if($newuser)return redirect()->back();
    }
    public function resetdata(){
        $this->reset(['name',"password",'email']);
    }

}
