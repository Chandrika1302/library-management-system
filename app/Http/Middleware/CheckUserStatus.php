<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class CheckUserStatus
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
        $path = $request->getPathInfo();
        if ($path == "/" || $path == "/login" || $path == "/register") {
            return $next($request);
        }
        if (session()->has('user')) {
            return $next($request);
        }
        return redirect('/login');

    }
}
// hi