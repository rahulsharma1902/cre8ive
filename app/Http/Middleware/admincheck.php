<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class admincheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->is_admin == 1){
            return $next($request); 
            }else{
                return redirect('/')->with('error','kindly login to open dashboard'); 
            }
        }else{
            return redirect('/')->with('error','kindly login to open dashboard');
        }

    }
}