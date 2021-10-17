<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()) {
            if (Auth::user()->user_role == 'admin') {

                return $next($request);
            }
            else if (Auth::user()->user_role == 'user'){
                return redirect()->route('home');
            }
        }
        else {

            return redirect()->route('welcome');
        }

    }
}





