<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Zon
{
    
    public function handle(Request $request, Closure $next): Response
    {
        // dd(Auth::user()->role);

        // if(Auth::user()->role != 'admin'){
        //     return abort(404);
        // }

        if(Auth::user()->role != 'admin'){
            return back()->with(['authMessage' => "You don't have permission."]);
        }
        return $next($request);
    }
}
