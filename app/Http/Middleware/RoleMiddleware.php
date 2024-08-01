<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (auth()->user()->type == "Admin") {
            // TODO: let the concerned controller function handle this
            return $next($request);  
        } 
        elseif(auth()->user()->type == "SuperAdmin"){
            return $next($request);  
        }
        else {
            return redirect('home')->with('error', 'you have no admin access');
        }


    }
}