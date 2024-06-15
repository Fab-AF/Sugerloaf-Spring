<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Support\Responsable;
use Symfony\Component\HttpFoundation\Response;

class ApiMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $authHeader = $request->header('Authorization');
       
        if (strpos($authHeader, 'Bearer ') !== 0) {
            $request['authenticate'] ="not-valid";
            return response()->json(['error' => 'Unauthenticated'],403);
        }
    
        $token = substr($authHeader, 7);
        if(!Hash::check($token, env('API_TOKEN'))) {
            $request['authenticate'] ="not-valid";
            return response()->json(['error' => 'Unauthenticated'],403);
        }
        return $next($request);
    }
}
