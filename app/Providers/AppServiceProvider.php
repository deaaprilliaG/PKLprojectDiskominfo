<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
    public function boot()
    {
        Validator::extend('time', function($attribute, $value, $parameters, $validator) {
            return preg_match('/^(2[0-3]|[01][0-9]):[0-5][0-9]$/', $value);
        }, 'The :attribute field must be a valid time.');
    }

}
