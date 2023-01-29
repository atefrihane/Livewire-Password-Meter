<?php

namespace VendorName\Skeleton;

use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use VendorName\Skeleton\Commands\SkeletonCommand;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('skeleton')
            ->hasConfigFile()
            ->hasViews();
          
    }
}
