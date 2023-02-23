<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        RateLimiter::for('login', function (Request $request) {
            return [
                    Limit::perMinute(3)->by($request->input('email'))->response(function() {
                        return redirect()->back()->with('limit', 'Tunggu 1 menit untuk percobaan selanjutnya');
                    }),
                ];
        });

        RateLimiter::for('verify-otp', function () {
            return [
                    Limit::perHour(3)->response(function() {
                        return redirect()->back()->with('limit', 'Tunggu untuk percobaan selanjutnya');
                    }),
                ];
        });

        RateLimiter::for('first', function () {
            return [
                    Limit::perMinute(1)->response(function() {
                        return redirect()->back()->with('limit', 'Tunggu 1 menit untuk percobaan selanjutnya');
                    }),
                ];
        });

        RateLimiter::for('third', function () {
            return [
                    Limit::perMinute(3)->response(function() {
                        return redirect()->back()->with('limit', 'Tunggu 1 menit untuk percobaan selanjutnya');
                    }),
                ];
        });
    }
}
