<?php

namespace App\Http\Livewire;

use DateTime;
use App\Models\LotItem;
use Livewire\Component;

use App\Models\Category;
use Illuminate\Support\Carbon;




class Home extends Component
{


    public function render()
    {
 
        $upcoming=LotItem::whereDate('start_date', '>', Carbon::today())->get();;
        // $lots = LotItem::latest()->paginate(5);
        $lots =LotItem::whereDate('start_date', '<', Carbon::today())->orderBy('id', 'desc')->take(5)->get();
        
        $categories = Category::all();
        return view('livewire.home',['categories'=>$categories],['lots'=>$lots,'upcoming'=>$upcoming])->layout('layouts.guest');
    }

}
