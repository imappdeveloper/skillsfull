<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use App\Models\Website;
use App\Models\Training;
use Illuminate\Support\Facades\View;
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
        //
         $services = Service::where('status', 1)->get();
         $tranings = Training::where('type', 'training')->get();
         $courses = Training::where('type', 'course')->get();
         $setting = Website::first();

    View::share('services', $services);
    View::share('setting', $setting);
    View::share('tranings', $tranings);
    View::share('courses', $courses);
    }
}
