<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        
        if (auth()->user()->role==='admin') {
            return redirect()->intended(config('admin.dashboard'));
        }
        return redirect()->intended(config('dashboard'));
    }

}