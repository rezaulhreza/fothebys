<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Account extends Component
{
    public function render()
    {
        return view('livewire.user.account')->layout('layouts.guest');
    }
}
