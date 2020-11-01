<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::user()){
            if ($request->user()->hasRole($role)) {
                return $next($request);
            }
            else{
                return abort(404);
            }
        }
        else{
            return abort(404);
        }

    }
}
