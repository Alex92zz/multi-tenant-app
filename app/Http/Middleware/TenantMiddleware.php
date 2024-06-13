<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TenantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost(); // returns to: 127.0.0.1

        $tenant = Tenant::where('domain', $host)->firstOrFail();

        // Share tenant data globally
        view()->share('tenant', $tenant);

        return $next($request);
    }
}
