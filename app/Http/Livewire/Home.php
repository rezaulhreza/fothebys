<?php

namespace App\Http\Livewire;

use DateTime;
use App\Models\LotItem;
use Livewire\Component;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;




class Home extends Component
{
    public $search;

    public function render()
    {
        $search=request()->query('search');
        
        if($search){
          $lots=  LotItem::where('title','LIKE',"%{$search}%")
          ->whereDate('start_date', '<=', Carbon::today())
            ->orWhere('artist','LIKE',$search)
            ->orWhere('year','LIKE',$search)
            ->orWhere('desc','LIKE',$search)
            ->orWhere('lot_ref','LIKE',$search)
            ->orWhere('category_id','LIKE',$search)
            ->orderBy('id','DESC')->get();

            
        }
        else{
            $lots =LotItem::whereDate('start_date', '<=', Carbon::today())->orderBy('id', 'desc')->take(5)->get();
            
        $upcoming=LotItem::whereDate('start_date', '>', Carbon::today())->get();;
            
        }
    
        $lotCount = LotItem::count();
        

        $upcoming=LotItem::whereDate('start_date', '>', Carbon::today())->get();;

        $lotCount = LotItem::count();
        
        $categories = Category::all();
        return view('livewire.home',['categories'=>$categories],['lots'=>$lots,'upcoming'=>$upcoming,'lotCount'=>$lotCount])->layout('layouts.guest');
    }


}
