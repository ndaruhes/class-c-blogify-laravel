<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMember
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if ($user) {
            if ($user->role == 'Member') {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
