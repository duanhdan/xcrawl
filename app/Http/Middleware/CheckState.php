<?php

namespace App\Http\Middleware;

use Closure;

class CheckState
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
        if (! $request->user()->state && $request->route()->uri != '/') {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
