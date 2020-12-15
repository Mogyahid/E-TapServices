<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
     
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role_id == 1) { #Admin
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
        
        // if (Auth::user()->role_id == 2) {
        //     // return redirect()->route('categoryAdmin.dashboard');
        // }
        // if (Auth::user()->role_id == 3) {
        //     return redirect()->route('provider.dashboard');
        // }
        // if (Auth::user()->role_id == 4) {
        //     return redirect()->route('client.home');
        // }
    }
}