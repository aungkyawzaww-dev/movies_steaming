<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->guard("admin")->check()){
            return redirect('/admin/dashboard');
        }
        return $next($request);
    }
}


// php artisan make:middleware RedirectIfAdminAuth
// php artisan make:middleware RedirectIfNotAdminAuth