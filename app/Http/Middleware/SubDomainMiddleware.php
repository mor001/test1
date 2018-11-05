<?php

namespace App\Http\Middleware;

use Closure;
//use Log;
class SubDomainMiddleware
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
        $subdomain = $request->route('subdomain');
        if(empty($subdomain)) {
          die('死んだンゴ');
        }
        //Log::info(print_r($request, true));
        return $next($request);
    }
}
