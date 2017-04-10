<?php

namespace App\Providers;

use App\Console\Commands\ModelMakeCommand;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;

class ArtisanServiceExtender extends ArtisanServiceProvider
{
    /**
     * The commands to be extended.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * The commands to be extended.
     *
     * @var array
     */
    protected $devCommands = [
        'ModelMake' => 'command.model.make',
    ];

    /**
     * Extend the command.
     *
     * @return void
     */
    protected function registerModelMakeCommand()
    {
        $this->app->extend('command.model.make', function ($command, $app) {
            return new ModelMakeCommand($app['files']);
        });
    }
}
