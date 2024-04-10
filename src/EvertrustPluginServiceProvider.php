<?php

namespace Evertrust\FilamentTheme;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;

class EvertrustPluginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (app()->runningInConsole()) {
            FilamentAsset::register([
                Css::make('theme', __DIR__ . '/../resources/dist/theme.css'),
            ], package: 'evertrust/filament-theme');
        }
    }
}