<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()){

            // admin role == 1
            // use role == 0

            if(Auth::user()->role >= '1'){
                return $next($request);
            }
            else{
                return redirect()->route('index');
            }
        }
        else{
            return route('login.form');
        }
    }
}
