<?php

namespace Mintreu\LaravelPanel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mintreu\LaravelPanel\Commands\LaravelPanelCommand;

class LaravelPanelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-panel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-panel_table')
            ->hasCommand(LaravelPanelCommand::class);
    }
}
