<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Chuyển hướng khi đã đăng nhập rồi
        if (Auth::guard($guard)->check()) {
            switch($guard){
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'writer':
                    return redirect()->route('writer.dashboard');
                default:
                    return redirect()->route('home');
            }
        }

        return $next($request);
    }
}
