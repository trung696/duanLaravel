<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
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
        if (session('id_role') === '1' || session('id_role') === '2'|| session('id_role') === '3') {
            return $next($request);
        } else {
            session()->flush();
            return redirect()->route('login')->with('message', 'Tài khoản này không có quyền truy cập vào trang quản trị');
        }

    }
}
