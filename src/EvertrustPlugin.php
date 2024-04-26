<?php

namespace Evertrust\FilamentTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;

class EvertrustPlugin implements Plugin
{

    public function getId(): string
    {
        return 'evertrust';
    }

    public function register(Panel $panel): void
    {
        $primary = Color::hex('#4D54A2');
        $primary[600] = '75, 109, 209';

        $panel
            ->colors([
                'primary' => $primary,
            ])
            ->brandName('EVERTRUST')
            ->favicon('https://evertrust.io/media/logo-sigle-blue.png')
            ->brandLogo('https://evertrust.io/media/logo-horizontal-blue.png')
            ->darkModeBrandLogo('https://evertrust.io/media/logo-horizontal-white.png')
            ->brandLogoHeight('auto')
            ->maxContentWidth('full')
            ->middleware([
                \Evertrust\FilamentTheme\Http\Middleware\RegisterTheme::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
