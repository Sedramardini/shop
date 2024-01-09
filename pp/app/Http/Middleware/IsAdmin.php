<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\Response;
use Auth;
use App\Http\Controllers\storeCategoryRequest;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    
    public function handle(Request $request, Closure $next)
    {   if(Auth::check()) {

        if(Auth::user()->is_admin==1){
            return $next($request);
        } 
       
      else{
        Abort(403);
        } }
        else{
    return redirect()->back()->with('status','You should log in');
}
}
}