<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Admin
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
                return $next($request);
            }else{
                return redirect()->route('home')->with('error', 'You do not have admin access');
            }

        }else{
            return redirect()->back()->with('error', 'You do not have admin access');

        }
        
    }
}
