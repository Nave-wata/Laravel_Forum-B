<?php

namespace App\Http\Middleware;

use App\Models\AccessLog;
use Closure;
use Illuminate\Http\Request;

class Access_log
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        AccessLog::create([
            'user_email' => $request->user()->email ?? "Not logged in",
            'thread_name' => $request->thread_name ?? "",
            'thread_id' => $request->thread_id ?? "",
            'access_log' => $request->ip()
        ]);

        return $next($request);
    }
}
