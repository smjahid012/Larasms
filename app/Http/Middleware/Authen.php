<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
class Authen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'web')
    {
        if(!Auth::guard($guard)->check())
        {
            return redirect()->route('homeLogin');
        }
        return $next($request);
    }
}
