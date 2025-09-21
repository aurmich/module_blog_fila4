<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\BannerResource\Pages;

<<<<<<< HEAD
use Filament\Actions\DeleteAction;
=======
<<<<<<< HEAD
use Filament\Actions\DeleteAction;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Blog\Filament\Resources\BannerResource;

class EditBanner extends EditRecord
{
    protected static string $resource = BannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            DeleteAction::make(),
=======
<<<<<<< HEAD
            DeleteAction::make(),
=======
            Actions\DeleteAction::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
}
