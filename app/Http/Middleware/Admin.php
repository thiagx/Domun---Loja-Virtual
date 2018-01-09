<?php

namespace domun\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        $isAdmin = false;

        if(Auth::check()){
          $isAdmin = true;
        }else{
          $isAdmin = false;
          return redirect('/login');
        }

        if(Auth::user()->status == '1'){
          $isAdmin = true;
        }
        else{
          $isAdmin = false;
        }

        if($isAdmin){
          return $next($request);
        }else{
          return redirect('/index');
        }


}
}
