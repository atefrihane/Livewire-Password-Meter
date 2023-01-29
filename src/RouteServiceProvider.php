<?php

namespace VendorName\Skeleton;

use Livewire\Livewire;
use App\Services\Riak\Connection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use VendorName\Skeleton\Http\Livewire\PasswordField;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        Livewire::component('password-field', PasswordField::class);
      
    }
}
