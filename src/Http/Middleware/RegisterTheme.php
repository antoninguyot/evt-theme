<?php

namespace Evertrust\FilamentTheme\Http\Middleware;

use Closure;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;

class RegisterTheme
{
    public function handle($request, Closure $next)
    {
        FilamentAsset::register([
            Css::make('theme', __DIR__ . '/../resources/dist/theme.css'),
        ], package: 'evertrust/filament-theme');

        return $next($request);
    }
}
