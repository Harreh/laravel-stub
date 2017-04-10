<?php

namespace App\Providers;


use App\Console\Commands\ModelMakeCommand;

class ArtisanServiceProvider extends \Illuminate\Foundation\Providers\ArtisanServiceProvider
{

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerModelMakeCommand()
    {
        $this->app->singleton('command.model.make', function ($app) {
            return new ModelMakeCommand($app['files']);
        });
    }
}
