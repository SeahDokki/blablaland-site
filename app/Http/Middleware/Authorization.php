<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Authorization
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  \Closure(Request): (Response|RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next, $grade): Response|RedirectResponse
    {
        if ($request->user() && $request->user()->grade_id < $grade ||
            !$request->user() && $grade != 0)
        {
            abort(404);
        }
        return $next($request);
    }
}
