<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == "1") {

                return $next($request);
            } else {
                return redirect("/")->with("message", "you need to be authorize as an Admin to acess your admin Dashboard, contact the school technical support team to be authorized");
            }
        } else {

            return redirect("/")->with("message", "login to acess dashboard");
        }

        return $next($request);
    }
}
