->withMiddleware(function (Middleware $middleware) {
        // Đăng ký tên tắt (alias) cho middleware
        $middleware->alias([
            'check.age' => \App\Http\Middleware\CheckAge::class,
        ]);
    })