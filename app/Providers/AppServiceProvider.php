<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Contracts\Tasks\TaskCreateInterface::class, \App\Services\Tasks\CreateTask::class);
        $this->app->bind(\App\Contracts\Tasks\TaskUpdateInterface::class, \App\Services\Tasks\UpdateTask::class);
        
        $this->app->bind(\App\Contracts\Projects\ProjectCreateInterface::class, \App\Services\Projects\CreateProject::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
