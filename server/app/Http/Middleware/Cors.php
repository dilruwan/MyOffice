<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        // return $next($request);
      return $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Content-Type', 'application/json')
        ->header('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Authorization, X-Requested-With, X-HTTP-Method-Override, Accept');
    }
}
