<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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
        if (Auth::check()) {
            $roles = json_decode($request->user()->getRoleNames());
            // var_dump($roles);die();
            if (! in_array('admin', $roles)) {
                dd('You are not admin');
            }
        }else{
            return redirect()->route('login');
        }
        

        return $next($request);
    }
}
