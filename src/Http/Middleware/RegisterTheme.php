<?php

namespace Evertrust\FilamentTheme\Http\Middleware;

use Closure;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentView;

class RegisterTheme
{
    public function handle($request, Closure $next)
    {
        FilamentAsset::register([
            Css::make('theme', __DIR__ . '/../resources/dist/theme.css'),
        ], package: 'evertrust/filament-theme');

        FilamentView::registerRenderHook(
            \Filament\View\PanelsRenderHook::SIDEBAR_NAV_END,
            fn(): string => "<script>document.querySelectorAll('.fi-sidebar-nav').forEach(group => group.classList.add('dark'))</script>"
        );

        return $next($request);
    }
}
