<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdmin 
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
       if(Auth::user()->user_group_id==1)
        {
        
          return $next($request);
        }
        if(Auth::user()->user_group=='hospitaladmin')
        {
          return  redirect()->route('hospital-admin-dashboard');
        }
       
       
       abort(404);
    }
}