<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
            elseif (Auth::guard($guard)->check() && Auth::users()->role == 1) {
                return redirect()->route('/superAdmin');
            }
            elseif (Auth::guard($guard)->check() && Auth::users()->role == 2) {
                return redirect()->route('/admin');
            }
            elseif (Auth::guard($guard)->check() && Auth::users()->role == 3) {
                return redirect()->route('/user');
            }
        }

        return $next($request);
    }
}
