<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleAdminMiddleware
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
        if ($role == "admin"){
            return redirect('news');
        }else {
            return $next($request);
        }
    }
}
