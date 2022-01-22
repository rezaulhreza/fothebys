<?php

namespace App\Http\Livewire;

use App\Models\Auction;
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
          ->where('status','=','1')
            ->orWhere('artist','LIKE',$search)
            ->orWhere('year','LIKE',$search)
            ->orWhere('desc','LIKE',$search)
            ->orWhere('lot_ref','LIKE',$search)


            ->latest()->paginate(5);

            
        }
        else{
            $lots =LotItem::whereDate('start_date', '<=', Carbon::today())
            ->where('status','=','1')->
            latest()->paginate(8);
            
        $upcoming=LotItem::whereDate('start_date', '>', Carbon::today())->where('status','=','1')->latest()->paginate(8);
            
        }
    
        $lotCount = LotItem::count();
        

        $upcoming=LotItem::whereDate('start_date', '>', Carbon::today())->where('status','=','1')->latest()->paginate(5);

        $lotCount = LotItem::count();
        
        $categories = Category::all();
        $auctions = Auction::all();
        return view('livewire.home',['categories'=>$categories,'auctions'=>$auctions,'lots'=>$lots,'upcoming'=>$upcoming,'lotCount'=>$lotCount])->layout('layouts.guest');
    }


}
