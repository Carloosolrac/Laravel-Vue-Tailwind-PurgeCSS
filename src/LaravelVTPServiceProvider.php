<?php

namespace Carloosolrac\LaravelVTP;

use Illuminate\Support\ServiceProvider;
use Carloosolrac\LaravelVTP\Commands\PresetCommand;

class LaravelVTPServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PresetCommand::class,
            ]);
        }
    }
}
