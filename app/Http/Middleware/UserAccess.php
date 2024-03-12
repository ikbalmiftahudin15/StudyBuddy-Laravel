<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $roleName
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $roleName): Response
    {
        // Cek apakah pengguna memiliki peran yang sesuai dengan yang diinginkan
        if (!$request->user() || !$request->user()->hasRole($roleName)) {
            return response()->json(['message' => 'You do not have permission to access this page.'], 403);
        }

        return $next($request);
    }
}
