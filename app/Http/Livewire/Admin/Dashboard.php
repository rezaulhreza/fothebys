<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq;
use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Models\Lot;
use App\Models\LotItem;

class Dashboard extends Component
{
    public function render()
    {
    $categoryCount = Category::count();
    $lotCount = LotItem::count();
    $userCount = User::count();
    $faqCount = Faq::count();
    
    return view('livewire.admin.dashboard.admin-dashboard',compact('categoryCount', 'userCount', 'faqCount','lotCount'))->layout('layouts.app');

    }
}
