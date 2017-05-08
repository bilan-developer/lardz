<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleUserMiddleware
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
        $role = Auth::user()->roles()->value("slug");
        if ($role == "user"){
            return redirect('news');
        }
        return $next($request);
    }
}
