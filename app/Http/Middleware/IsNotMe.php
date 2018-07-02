<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Http\Controllers\MessaageOuputController;
class IsNotMe
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
		if (Auth::user() &&  Auth::user()->id != $request["id"]) {
			return $next($request);
		}
		return redirect('/');
    }
}
