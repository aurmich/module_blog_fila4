<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\CategoryResource\Pages;

<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
=======
<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Actions;
use Modules\Blog\Filament\Resources\CategoryResource;
use Modules\Lang\Filament\Resources\Pages\LangBaseCreateRecord;

class CreateCategory extends LangBaseCreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            LocaleSwitcher::make(),
=======
<<<<<<< HEAD
            LocaleSwitcher::make(),
=======
            Actions\LocaleSwitcher::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            // ...
        ];
    }
}
