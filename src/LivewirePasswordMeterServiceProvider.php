<?php

namespace Atef\LivewirePasswordMeter;

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Atef\LivewirePasswordMeter\Commands\SkeletonCommand;
use Atef\LivewirePasswordMeter\Http\Livewire\PasswordField;

class LivewirePasswordMeterServiceProvider extends PackageServiceProvider
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

    public function bootingPackage()
    {
        $this->registerLivewireComponents();
    }

    public function registerLivewireComponents()
    {
        Livewire::component('password-field', PasswordField::class);
    }
}