<?php

namespace App\Http\Livewire;

use App\Models\Apply;
use Livewire\Component;
use Illuminate\Http\Request;

class ApplyComponent extends Component
{
    public function render()
    {
        return view('livewire.apply-component')->layout('layouts.guest');
    }

   
}
