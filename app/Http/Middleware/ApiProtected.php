<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class ApiProtected
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->header('authorization') != 'postalcodesghifar123!')
        {
            return response()->json([
                'status' => 'not authorized',
                'time' => Carbon::now('Asia/Jakarta'),
            ], 401);
        }
        return $next($request);
    }
}
