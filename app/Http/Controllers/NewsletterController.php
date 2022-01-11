<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('subscribe');
    }
 
    public function store(Request $request)
    {
       
        return view('livewire.newsletter-success');
            
    }
}
