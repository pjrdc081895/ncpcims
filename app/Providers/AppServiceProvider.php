<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //view()->composer('content.corpse', function($view){
        //    $view->with('corpse',App\Corpse::searchCorpse());
        \Validator::extend('year_greater_than',function($attribute,$value,$parameters,$validator) {
            $year = Carbon::parse($value)->year;//2017
            $since = $parameters[0];//2018
            return $since<=$year && $year<=Carbon::now()->year ;
                
        },"the year in :attribute must between 1900 and ".Carbon::now()->year);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
