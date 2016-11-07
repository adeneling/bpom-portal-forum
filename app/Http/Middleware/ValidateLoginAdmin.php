<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ValidateLoginAdmin
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
		if(auth('forum')->check()){
			// return $next($request);
			return redirect()->route('index');
		}

		// if(auth('forum')->check()){
		// 	auth('forum')->logout();
		// 	Auth::logout();
		// }

		// return $next($request);
	}
}
