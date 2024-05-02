<?php

namespace Mehasan\DateTimeConverter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mehasan\DateTimeConverter\Commands\DateTimeConverterCommand;

class DateTimeConverterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-datetime-converter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-datetime-converter_table')
            ->hasCommand(DateTimeConverterCommand::class);
    }
}
