<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('appointments', function (Request $request) {
            $email = Str::lower((string) $request->input('email'));
            $emailKey = $email !== ''
                ? sha1($request->ip().'|'.$email)
                : $request->ip();

            return [
                Limit::perMinute(5)->by($request->ip()),
                Limit::perHour(20)->by($emailKey),
                Limit::perDay(2)->by('appointments-daily:'.$emailKey),
            ];
        });

        RateLimiter::for('admin-login', function (Request $request) {
            $email = Str::lower((string) $request->input('email'));
            $key = $email !== ''
                ? sha1($request->ip().'|'.$email)
                : $request->ip();

            return Limit::perMinute(5)->by($key);
        });
    }
}
