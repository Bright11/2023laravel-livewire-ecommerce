<?php

namespace App\Livewire\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Countcart extends Component
{
    #[On('item-added')]
    public function cartcount($newcart=null){

    }
    #[On('deletecart')]
    public function cartdelete($delete=null){

    }
    public function render()
    {
        if(Auth::user()){
            $count=Cart::where("user_id",Auth::user()->id)->count();

        }else{
            $count=0;
        }
        return view('livewire.cart.countcart',['count'=>$count]);
    }
}
