<?php namespace Bantenprov\TaskManagement\Http\Middleware;

use Closure;

/**
 * The TaskManagementMiddleware class.
 *
 * @package Bantenprov\TaskManagement
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskManagementMiddleware
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
        return $next($request);
    }
}
