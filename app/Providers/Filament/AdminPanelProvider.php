<?php

declare(strict_types=1);

namespace Modules\Blog\Providers\Filament;

<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
use Filament\Panel;
=======
<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
use Filament\Panel;
=======
use Filament\Panel;
use Filament\SpatieLaravelTranslatablePlugin;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Pboivin\FilamentPeek\FilamentPeekPlugin;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Blog';

    public function panel(Panel $panel): Panel
    {
        $panel->plugins([
            // FilamentPeekPlugin::make(),
<<<<<<< HEAD
            SpatieTranslatablePlugin::make(),
=======
<<<<<<< HEAD
            SpatieTranslatablePlugin::make(),
=======
            SpatieLaravelTranslatablePlugin::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ]);

        return parent::panel($panel);
    }
}
