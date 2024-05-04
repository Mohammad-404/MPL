<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\URL;

use Closure;

class Localization
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
        // app()->setlocale($request->segment(1));
        // URL::defaults(['locale' => $request->segment(1)]);

        app()->setLocale(session('localization',config('app.locale')));

        return $next($request);
    }
}
