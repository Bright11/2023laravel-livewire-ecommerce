<?php

namespace App\Livewire\Frontend\Category;

use App\Models\Category as ModelsCategory;
use App\Models\Product;
use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        $cat=ModelsCategory::all();
        $latestItems = Product::latest()->take(2)->get();
        $latestItemsdown = Product::inRandomOrder()->take(2)->get();
         // Fetch items ordered by the lowest price
         $lowPriceItems = Product::orderByDesc('price')->take(4)->get();
        return view('livewire.frontend.category.category',['cat'=>$cat,'latestItems'=>$latestItems,'latestItemsdown'=>$latestItemsdown,'lowPriceItems'=>$lowPriceItems]);
    }
}
