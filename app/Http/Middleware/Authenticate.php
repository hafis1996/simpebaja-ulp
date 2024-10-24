<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    // protected function redirectTo(Request $request): ?string
    // {
    //     if (request()->is('skpd/*')|| $request->is('ulp/*')) {
    //         return route('login');
    //     }else { 
    //         // return $request->expectsJson() ? null : route('/'); 
    //         return $request->expectsJson() ? null : route('home'); 
    //     }
    // }

    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            return route('login');
        }

        return null;
    }
}
