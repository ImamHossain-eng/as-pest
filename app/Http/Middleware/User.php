<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class User
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
        if(Auth::check()){
            if(Auth::user()->is_admin == 1){
                return redirect()->route('admin.home')->with('error', 'You do not have User access');
                
            }else{
                return $next($request);
            }

        }else{
            return redirect()->back()->with('error', 'You are not authenticated user. Access Denied');

        }

        //return $next($request);
    }
}
