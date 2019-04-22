<?php

namespace App\Http\Middleware;

use Session;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::user()->admin)
        {
            Session::flash('info','You do not have permssion to performe action');
            return redirect()->back();
        }

        return $next($request);
    }
}
