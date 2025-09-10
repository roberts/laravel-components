<?php

namespace Roberts\LaravelComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Roberts\LaravelComponents\Commands\LaravelComponentsCommand;

class LaravelComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_components_table')
            ->hasCommand(LaravelComponentsCommand::class);
    }
}
