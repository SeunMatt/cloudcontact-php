<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Http\Controllers\Utils\Constants;

class AuthMiddleware
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

        if(!Auth::check()) { return redirect(Constants::GET_LOGIN)->with("status", "Login Please"); }

       return $next($request);

    }
}
