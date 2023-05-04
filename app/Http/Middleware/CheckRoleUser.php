<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleUser
{
    /**
     * Handle an incoming request.
     * @return RedirectResponse
     */
    public function handle(): RedirectResponse
    {
        if(auth()->check() && auth()->user()->role === 1)
        {
            return redirect()->route('admin.panel');
        }else{
            return redirect()->route('home');
        }
    }
}
