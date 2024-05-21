<?php

namespace App\Http\Middleware;

use App\Models\Ban;
use App\Tools\Network;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RestrictIpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  \Closure(Request): (Response|RedirectResponse)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $ban = Ban::whereIpAddress(Network::getIP())
            ->where(function ($query) {
                $query->whereNull('end_at')
                    ->orWhere('end_at', '>', now());
            })
            ->first();
        if ($ban) {
            return response()->view('errors.ban', compact('ban'));
        }
        return $next($request);
    }
}
