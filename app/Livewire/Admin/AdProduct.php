<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
class AdProduct extends Component
{
    use WithFileUploads;

    public $cat_id;
    public $name;
    public $price;
    public $qty;
    public $description;
    public $discount;
    public $image;

    public $getpro;


    public function render()
    {
        $getcat=Category::all();
        return view('livewire.admin.ad-product',['getcat'=>$getcat]);
    }

    public function addproduct(){
        $validated = $this->validate([
            'name' => 'required',
           'price'=>'required|integer',
           'qty'=>'integer|required',
           'description'=>'required',
           'discount'=>'integer',
          'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $pro=new Product;
        $pro->cat_id=$this->cat_id;
        $pro->user_id=Auth::user()->id;
        $pro->name=$this->name;
        $pro->price=$this->price;
        $pro->views=0;
        $pro->qty=$this->qty;
        $pro->description=$this->description;
        $pro->discount=$this->discount?? 0;
        if($this->image){
            $imagename=$this->image->store("product","public");
            $pro->image=$imagename;
          }
          $pro->save();
          $this->mount();
          $this->resetdata();

    }
    public function resetdata(){
        $this->reset([
            'name','price','qty','description','image','discount'
        ]);
    }

    public function mount(){
        $this->getpro=Product::all();

    }
}
