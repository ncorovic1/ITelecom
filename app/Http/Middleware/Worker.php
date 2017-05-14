<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Worker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * !Only to be used after auth middleware validation.
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->type != 'worker')
                return redirect('home');
        return $next($request);
    }
}
