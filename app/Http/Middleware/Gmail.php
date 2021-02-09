<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Gmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::guest()){
            dd("Tu no estas logueado");
        }else{
            if (explode(Auth::user()->email,"@")[1]=="hotmail.com"){

            }
        }


        return $next($request);
    }
}
