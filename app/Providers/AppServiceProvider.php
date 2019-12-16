<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Crud;

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
        view()->composer('*', function($view){
            $view->with('classname', Crud::all());
        });

        view()->composer('*', function($view){
            $data = Crud::all();
            $totalNilai = 0;
            foreach($data as $d){
                $point = $d->point;
                $totalNilai = $totalNilai+$point;
            }
            $view->with('point', $totalNilai);
        });
    }
}
