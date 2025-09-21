<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\CategoryResource\Pages;

<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use Modules\Blog\Filament\Resources\CategoryResource;

class ManageCategories extends ManageRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            CreateAction::make(),
=======
<<<<<<< HEAD
            CreateAction::make(),
=======
            Actions\CreateAction::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
}
