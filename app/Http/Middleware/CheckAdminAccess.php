<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminAccess
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
        if(!auth()->user() || !auth()->user()->can('access_admin')){
            abort(404);
        }

        return $next($request);
    }
}
