<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\CategoryResource\Pages;

<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions\DeleteAction;
=======
<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions\DeleteAction;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Actions;
use Modules\Blog\Filament\Resources\CategoryResource;
use Modules\Lang\Filament\Resources\Pages\LangBaseEditRecord;

class EditCategory extends LangBaseEditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            LocaleSwitcher::make(),
            DeleteAction::make(),
=======
<<<<<<< HEAD
            LocaleSwitcher::make(),
            DeleteAction::make(),
=======
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
}
