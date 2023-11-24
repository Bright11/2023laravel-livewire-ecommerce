<?php

namespace App\Livewire\Product;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product as Myproductmodel;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        $procat = Category::with('Product')->get();
        return view('livewire.product.product',['pro'=>$procat]);
    }

    public function addtocat($id){

        $checkpro=Myproductmodel::find($id);
        if(!$checkpro) return redirect()->back();
        $checkwishlist=Wishlist::where('product_id',$id)->where('user_id',Auth::user()->id)->first();
        $checart=Cart::where('product_id',$id)->where('user_id',Auth::user()->id)->first();
        if($checkwishlist)$checkwishlist->delete();//deleting item from whislist before adding it into cart
        if($checart){
            $checart->qty=$checart->qty+1;
            $checart->total=$checart->total +$checkpro->price;
            $checart->update();
        }else{
            $newcart=new Cart;
            $newcart->product_id=$checkpro->id;
            $newcart->user_id=Auth::user()->id;
            $newcart->total=$checkpro->price;
            $newcart->qty=1;
            $newcart->save();
            $this->dispatch('item-added',$newcart);
        }

    }

}
