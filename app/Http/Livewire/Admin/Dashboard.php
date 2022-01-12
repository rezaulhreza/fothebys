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
    $categoryCount = Category::count();
    $lotCount = LotItem::count();
    $userCount = User::count();
    $faqCount = Faq::count();
    $bidCount = Bid::count();
    $bookingCount = Bid::count();
    $applicationCount = Application::count();
    $users=User::latest()->paginate(3);
    $bookings=Booking::latest()->with(['user'])->paginate(3);
    $bids = Bid::latest()->with(['user','lot'])->paginate(3);
    $applications=Application::latest()->with(['user'])->paginate(3);
    
   
    
    return view('livewire.admin.dashboard.admin-dashboard',compact('categoryCount', 'applications','applicationCount','userCount', 'faqCount','lotCount','users','bookings','bids','bookingCount','bidCount'))->layout('layouts.app');

    }

    


}
