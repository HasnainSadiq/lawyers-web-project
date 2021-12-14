<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthClient
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
        if(session('utype') === "CLNT"){
            return $next($request);
        }else{
            session()->flush();
            return redirect()->route('login');
        }
        return $next($request);
    }
}
