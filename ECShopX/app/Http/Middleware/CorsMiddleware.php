<?php

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
    public function handle($request, Closure $next)
    {
        $origin = $request->headers->get('Origin');
        $allowed = env('CORS_ALLOWED_ORIGINS', 'http://localhost:8080,http://127.0.0.1:8080');
        $allowedList = array_filter(array_map('trim', explode(',', $allowed)));

        $allowOrigin = null;
        if (in_array('*', $allowedList, true)) {
            $allowOrigin = '*';
        } elseif ($origin && in_array($origin, $allowedList, true)) {
            $allowOrigin = $origin;
        }

        if (strtoupper($request->getMethod()) === 'OPTIONS') {
            $response = response('', 204);
        } else {
            $response = $next($request);
        }

        $headers = [
            'Access-Control-Allow-Methods' => 'GET, POST, PUT, PATCH, DELETE, OPTIONS',
            'Access-Control-Allow-Headers' => 'Content-Type, Authorization, X-Requested-With, X-Authorization, Origin, Accept, X-CSRF-TOKEN',
            'Access-Control-Max-Age' => '86400',
        ];

        if ($allowOrigin) {
            $headers['Access-Control-Allow-Origin'] = $allowOrigin;
        }

        return $response->withHeaders($headers);
    }
}
