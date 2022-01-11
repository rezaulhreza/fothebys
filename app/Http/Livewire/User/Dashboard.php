<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public $members;
    public function render()
    {
        $members =  DB::table('applications')->select('user_id','type')->where('type','=','Seller')->orWhere('type','=','Seller')->first();
        return view('livewire.user.dashboard')->layout('layouts.guest');
        
    }
    
}
