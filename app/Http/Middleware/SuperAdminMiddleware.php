<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
   public function handle(Request $request, Closure $next)
    {
        if (!$request->header('Authorization')) {
            return $this->returnUnauthorized();
        }

        if (!$token = $request->bearerToken()) {
            return $this->returnUnauthorized();
        }

        if ($token !== config('api.key')) {
            return $this->returnUnauthorized();
        }

        return $next($request);
    }

    private function returnUnauthorized()
    {
        return response()->json([
            "errors" => [[
                "status" => 403,
                "title" => "Permission denied",
            ]]
        ], 403);
    }
}