<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null){
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->is_partner == 'yes'){
                return redirect('/partners/dashboard');
            }
            else{
                return redirect('/partners/login');
            }
        }

        return $next($request);
    }
}
