<?php

namespace VendorName\Skeleton\Tests;

use Illuminate\Support\Facades\View;

use Livewire\LivewireServiceProvider;
use VendorName\Skeleton\RouteServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use VendorName\Skeleton\SkeletonServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'VendorName\\Skeleton\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
      
        View::addLocation(dirname(__DIR__).'/resources/views');
        $this->app['config']->set('app.key', 'AckfSECXIvnK5r28GVIWUAxmbBSjTsmF');
    }

    protected function getPackageProviders($app)
    {
        return [
           
            SkeletonServiceProvider::class,
            RouteServiceProvider::class,
       
            LivewireServiceProvider::class
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_skeleton_table.php.stub';
        $migration->up();
        */
    }
}
