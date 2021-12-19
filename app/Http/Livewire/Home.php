<?php

namespace App\Http\Livewire;

use App\Models\LotItem;
use Livewire\Component;
use App\Models\Category;

class Home extends Component
{
    public function render()
    {
        
        $lots = LotItem::latest()->paginate(4);
        $categories = Category::all();
        return view('livewire.home',['categories'=>$categories],['lots'=>$lots])->layout('layouts.guest');
    }
}
