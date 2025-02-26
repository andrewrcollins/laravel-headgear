<?php

namespace AndrewRCollins\LaravelHeadgear;

use AndrewRCollins\LaravelHeadgear\Commands\LaravelHeadgearCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelHeadgearServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-headgear')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_headgear_table')
            ->hasCommand(LaravelHeadgearCommand::class);
    }
}
