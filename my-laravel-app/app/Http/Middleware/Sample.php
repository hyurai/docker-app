<?php

namespace App\Http\Middleware;

use Closure;

class Sample
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        if(!in_array('ja', $request->getLanguages())) {
            abort(403);
        }
        return $next($request);
    }
}
