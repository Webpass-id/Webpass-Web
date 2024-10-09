<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        $lang = Session::get('applocale', config('app.locale'));
        App::setLocale($lang);

        return $next($request);
    }
}
