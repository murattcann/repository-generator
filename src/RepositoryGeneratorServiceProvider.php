<?php

namespace Mmurattcann\RepositoryGenerator;

use Illuminate\Support\ServiceProvider;

class RepositoryGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RepositoryMakeCommand::class,
                InterfaceMakeCommand::class

            ]);
        }
    }
}
