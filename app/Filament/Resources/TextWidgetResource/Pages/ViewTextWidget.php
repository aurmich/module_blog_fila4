<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\TextWidgetResource\Pages;

<<<<<<< HEAD
use Filament\Actions\EditAction;
=======
<<<<<<< HEAD
use Filament\Actions\EditAction;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Modules\Blog\Filament\Resources\TextWidgetResource;

class ViewTextWidget extends ViewRecord
{
    protected static string $resource = TextWidgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            EditAction::make(),
=======
<<<<<<< HEAD
            EditAction::make(),
=======
            Actions\EditAction::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
}
