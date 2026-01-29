public function handle(Request $request, Closure $next)
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