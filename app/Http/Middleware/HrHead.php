<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class HrHead
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
      //dd(Auth::user());
       if(Auth::user()->user_group_id==3)
        {
        
          return $next($request);
        }
      
       
       
       abort(404);
    }
}
