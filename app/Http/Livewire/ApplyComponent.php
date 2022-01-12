<?php

namespace App\Http\Livewire;

use App\Models\Apply;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplyComponent extends Component
{
   
    public function render()
    {
        $application=Application::all()->with(['user']);
        return view('livewire.apply-component')->layout('layouts.guest');
    }

   
}
