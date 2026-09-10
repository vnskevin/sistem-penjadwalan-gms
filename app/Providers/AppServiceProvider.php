<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (app()->environment('local') && request()->server('HTTP_HOST')) {
            URL::forceRootUrl(
                request()->getScheme() . '://' . request()->server('HTTP_HOST')
            );
        }
    }
}