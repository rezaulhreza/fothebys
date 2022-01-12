<?php

namespace App\Http\Livewire\Admin;

use App\Models\Application;
use App\Models\Bid;
use App\Models\Faq;
use App\Models\Lot;
use App\Models\User;
use App\Models\Booking;
use App\Models\LotItem;
use Livewire\Component;
use App\Models\Category;

class Dashboard extends Component
{
    public function render()
    {

        $search=request()->query('search');
        
        if($search){
            $users=  User::where('name','LIKE',"%{$search}%")
            ->orWhere('email','LIKE',"%{$search}%")
            ->orWhere('role','LIKE',"%{$search}%")
            
            ->orderBy('id','DESC')->latest()->paginate(5);

            $bids=  Bid::where('user_id','LIKE',"%{$search}%")
            ->orWhere('price','LIKE',"%{$search}%")
            ->orWhere('lot_item_id','LIKE',"%{$search}%")
            ->orderBy('id','DESC')->latest()->paginate(5);
            
            $bookings=  Booking::where('status','LIKE',"%{$search}%")
            ->orWhere('post_code','LIKE',"%{$search}%")
            ->orWhere('reason','LIKE',"%{$search}%")
            ->orWhere('status','LIKE',"%{$search}%")
            ->orWhere('contact','LIKE',"%{$search}%")
            
            ->orderBy('id','DESC')->latest()->paginate(5);
     
            $applications=  Application::where('user_id','LIKE',"%{$search}%")
            ->orWhere('postcode','LIKE',"%{$search}%")
            ->orWhere('address','LIKE',"%{$search}%")
            ->orWhere('country','LIKE',"%{$search}%")
            ->orWhere('type','LIKE',"%{$search}%")
            ->orWhere('approved','LIKE',"%{$search}%")
            
            ->orderBy('id','DESC')->latest()->paginate(5);
          
        }

        else{

        
    $users=User::latest()->paginate(3);
    $bookings=Booking::latest()->with(['user'])->paginate(3);
    $bids = Bid::latest()->with(['user','lot'])->paginate(3);
    $applications=Application::latest()->with(['user'])->paginate(3);
}
   
           
            
$categoryCount = Category::count();
$lotCount = LotItem::count();
$userCount = User::count();
$faqCount = Faq::count();
$bidCount = Bid::count();
$bookingCount = Bid::count();
$applicationCount = Application::count();
    return view('livewire.admin.dashboard.admin-dashboard',compact('categoryCount', 'applications','applicationCount','userCount', 'faqCount','lotCount','users','bookings','bids','bookingCount','bidCount'))->layout('layouts.app');

    }

    


}
