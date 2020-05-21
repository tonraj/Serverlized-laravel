<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserMiddleware
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

        if ($request->expectsJson()) {
            $suth = Auth::guard('customer')->check();
            if($suth == false){
                abort(401);
            }
        }

        
        return $next($request);
    }
}
