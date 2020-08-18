<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param $permissions
     * @return mixed
     */
    public function handle($request, Closure $next, ...$permissions)
    {
        $access = false;

        if(!auth()->user() || !auth()->user()->can($permissions)){
            abort(404);
        }

        foreach ($permissions as $permission) {
            if(auth()->user()->can($permissions)) {
                $access = true;
            }
        }

        if(!$access){
            abort(404);
        }

        return $next($request);
    }
}
