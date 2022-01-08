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
        // if ( ! Newsletter::isSubscribed($request->email) ) 
        // {
        //     Newsletter::subscribePending($request->email);
        //     return redirect('newsletter')->with('success', 'Thanks For Subscribe');
        // }
        // return redirect('newsletter')->with('error', 'Sorry! You have already subscribed ');
        return view('livewire.newsletter-success');
            
    }
}
