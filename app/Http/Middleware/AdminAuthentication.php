<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (session('role')==='admin') {
            # code...
          
            return redirect()->route('admin.dashboard');
        }
        else {
            session()->flush();
            return redirect()->route('login');
        }

        return $next($request);
    }
}
