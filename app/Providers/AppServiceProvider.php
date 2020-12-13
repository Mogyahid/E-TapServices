<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Schema;
use DateTime;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        #checking for 18 years old
        Validator::extend('olderThan', function($attribute, $value, $parameters)
        {
            $minAge = ( ! empty($parameters)) ? (int) $parameters[0] : 13;
            return (new DateTime)->diff(new DateTime($value))->y >= $minAge;

            // or the same using Carbon:
            // return Carbon\Carbon::now()->diff(new Carbon\Carbon($value))->y >= $minAge;
        });
    }
}
