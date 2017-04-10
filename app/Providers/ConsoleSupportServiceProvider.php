<?php

namespace App\Providers;

use Illuminate\Database\MigrationServiceProvider;
use Illuminate\Foundation\Providers\ComposerServiceProvider;

class ConsoleSupportServiceProvider extends \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider
{
    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        ArtisanServiceProvider::class,
        MigrationServiceProvider::class,
        ComposerServiceProvider::class,
    ];
}
