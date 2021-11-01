<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageCheck
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
        if($request->age && $request->age<18){
            return redirect('noaccessPage');

        };
        
        echo "<h1>This text is coming from the middleware</  h1>";
        return $next($request);
    }
}
