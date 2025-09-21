<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Modules\Blog\Filament\Resources\ProfileResource\RelationManagers\RatingMorphsRelationManager;
use Modules\Blog\Filament\Resources\ProfileResource\Pages\ListProfiles;
use Modules\Blog\Filament\Resources\ProfileResource\Pages\CreateProfile;
use Modules\Blog\Filament\Resources\ProfileResource\Pages\EditProfile;
use Modules\Blog\Filament\Resources\ProfileResource\Pages\ViewProfile;
use Filament\Resources\Pages\PageRegistration;
<<<<<<< HEAD
=======
=======
use Filament\Resources\Concerns\Translatable;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Modules\Blog\Filament\Resources\ProfileResource\Pages;
use Modules\Blog\Filament\Resources\ProfileResource\RelationManagers;
use Modules\Blog\Models\Profile;
use Modules\User\Filament\Resources\BaseProfileResource;

class ProfileResource extends BaseProfileResource
{
    use Translatable;

    protected static ?string $model = Profile::class;

    /**
     * @return array<int, class-string>
     */
    public static function getRelations(): array
    {
        return [
<<<<<<< HEAD
            RatingMorphsRelationManager::class,
=======
<<<<<<< HEAD
            RatingMorphsRelationManager::class,
=======
            RelationManagers\RatingMorphsRelationManager::class,
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, PageRegistration>
=======
<<<<<<< HEAD
     * @return array<string, PageRegistration>
=======
     * @return array<string, \Filament\Resources\Pages\PageRegistration>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
     */
    public static function getPages(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            'index' => ListProfiles::route('/'),
            'create' => CreateProfile::route('/create'),
            'edit' => EditProfile::route('/{record}/edit'),
            'view' => ViewProfile::route('/{record}'),
<<<<<<< HEAD
=======
=======
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
            'view' => Pages\ViewProfile::route('/{record}'),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            // 'getcredits' => Pages\GetCreditProfile::route('/{record}/getcredits'),
        ];
    }
}
