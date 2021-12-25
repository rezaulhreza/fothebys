<?php

namespace App\Http\Livewire\Admin;

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
    $users=User::latest()->paginate(5);
    $bookings=Booking::latest()->with(['user'])->paginate(3);
   
    
    return view('livewire.admin.dashboard.admin-dashboard',compact('categoryCount', 'userCount', 'faqCount','lotCount','users','bookings'))->layout('layouts.app');

    }
}
