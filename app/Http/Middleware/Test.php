<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Test
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
        dd(Auth::user());
      if(Auth::user()->group_id==1)
        {
          dd("sp admin");
          return $next($request);
        }
        if(Auth::user()->group_id==2)
        {
          return  redirect()->route('super-admin-dashboard');
        }

       abort(404);
    }
}
