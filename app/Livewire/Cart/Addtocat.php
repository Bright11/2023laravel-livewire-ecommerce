<?php

namespace App\Livewire\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Addtocat extends Component
{

    public $mycartitem;

    #[on('item-added')]
    public function cartcount($newcart=null){

    }

    public function deletecat($id){
        $delete=Cart::where("user_id",Auth::user()->id)->where('id',$id)->delete();
        $this->dispatch('deletecart',$delete);
    }
    public function render()
    {
        $this->mycartitem=Cart::where("user_id",Auth::user()->id)->get();
        $total=Cart::where('user_id',Auth::user()->id)->sum('total');
            return view('livewire.cart.addtocat',['sum'=>$total]);

    }


    // public function countcart($id){
    //     return $id;
    // }
}
