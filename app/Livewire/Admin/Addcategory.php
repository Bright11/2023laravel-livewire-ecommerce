<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class Addcategory extends Component
{
    public $name='';
    public $data;
    public $update=false;
    public $catid;
    public function render()
    {

        return view('livewire.admin.addcategory');
    }

    public function mount(){
        $this->data=Category::all();
    }
    public function addcatename(){
//$url = Str::random(5);
        $cat=new Category;
       $cat->slug=strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',  $this->name));
       $cat->name=strtolower($this->name);
       $cat->save();
       $this->resetdata();
       $this->mount();


    }
    public function resetdata(){
        $this->reset(['name']);
    }

    public function deletecat(Category $category){
          $category->delete();
          $this->mount();
       // $cat=Category::find($category);
       //$cat->name= $this->name;
    }

    public function updatecat($id){
        $getcat=Category::find($id);
        $this->name=$getcat->name;
        $this->catid=$getcat->id;
        $this->update=true;
        // $this->mount();
     // $cat=Category::find($category);
     //$cat->name= $this->name;
  }
  public function edit(){
    $getcat=Category::find($this->catid);
    $getcat->slug=strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',  $this->name));
    $getcat->name=$this->name;
    $getcat->update();
    $this->mount();
    $this->update=false;
    $this->resetdata();
}
}
