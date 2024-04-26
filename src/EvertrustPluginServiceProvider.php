<?php

namespace Evertrust\FilamentTheme;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;
use BladeUI\Icons\Factory as BladeIconFactory;

class EvertrustPluginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (app()->runningInConsole()) {
            FilamentAsset::register([
                Css::make('theme', __DIR__ . '/../resources/dist/theme.css'),
            ], package: 'evertrust/filament-theme');

            $this->publishes([
                __DIR__.'/../resources/icons' => public_path('vendor/evertrust/icons'),
            ], 'evertrust-icons');
        }

        $this->callAfterResolving(BladeIconFactory::class, function (BladeIconFactory $factory) {
            $factory->add('evertrust', array_merge(['path' => __DIR__.'/../resources/icons'], [
                'prefix' => 'evertrust'
            ]));
        });
    }
}