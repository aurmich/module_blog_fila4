<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\TextWidgetResource\Pages;

<<<<<<< HEAD
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
=======
<<<<<<< HEAD
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Blog\Filament\Resources\TextWidgetResource;

class EditTextWidget extends EditRecord
{
    protected static string $resource = TextWidgetResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            ViewAction::make(),
            DeleteAction::make(),
=======
<<<<<<< HEAD
            ViewAction::make(),
            DeleteAction::make(),
=======
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }

    protected function getRedirectUrl(): string
    {
<<<<<<< HEAD
        return (string) static::getResource()::getUrl('index');
=======
<<<<<<< HEAD
        return (string) static::getResource()::getUrl('index');
=======
        return static::getResource()::getUrl('index');
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    }
}
