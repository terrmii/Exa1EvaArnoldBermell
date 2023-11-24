<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class manzanasEliminadas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    
    public function terminate(Request $request, $response) 
    {
        $tipoManzana = $request->tipoManzana;
        Log::info('Se ha eliminado la manzana: ' . $tipoManzana);
    }
}
