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
            ->maxContentWidth('full')
            ->colors([
                'primary' => $primary,
            ])
            ->darkMode(false)
            ->middleware([
                \Evertrust\FilamentTheme\Http\Middleware\RegisterTheme::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
