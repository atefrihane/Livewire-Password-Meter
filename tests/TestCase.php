<?php

namespace Atef\LivewirePasswordMeter\Tests;

use Illuminate\Support\Facades\View;


use Atef\LivewirePasswordMeter\RouteServiceProvider;
use Atef\LivewirePasswordMeter\SkeletonServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Atef\\LivewirePasswordMeter\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
      
        View::addLocation(dirname(__DIR__).'/resources/views');
        $this->app['config']->set('app.key', 'AckfSECXIvnK5r28GVIWUAxmbBSjTsmF');
    }

    protected function getPackageProviders($app)
    {
        return [
           
            SkeletonServiceProvider::class,
       
        

        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_LivewirePasswordMeter_table.php.stub';
        $migration->up();
        */
    }
}
