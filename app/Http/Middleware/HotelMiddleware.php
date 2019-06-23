<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\View\View;
use App\Hotel;

class HotelMiddleware
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
        // $size = Hotel::count();
        // if ($size == 0) {
        //     return view('hotel.create');
        // }else{
        //     return view('hotel.edit');
        // }

        return $next($request);
    }
}
