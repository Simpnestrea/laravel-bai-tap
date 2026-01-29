<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lấy tuổi từ Session
        $age = session('age');

        // Logic: Nếu có tuổi VÀ là số VÀ >= 18 thì cho qua
        if ($age && is_numeric($age) && $age >= 18) {
            return $next($request);
        }

        // Ngược lại thì chặn
        return response("Không được phép truy cập (Chưa đủ 18 tuổi hoặc chưa nhập tuổi)", 403);
    }
}