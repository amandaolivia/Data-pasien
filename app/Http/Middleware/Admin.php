<?php

namespace App\Http\Middleware;
use App\Role;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $role = Auth::user()->id_roles;
        if($role=='1'){

            return $next($request);
        }
        return abort(403, 'user does not have the right roles');

    }
}
