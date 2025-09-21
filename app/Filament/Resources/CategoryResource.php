<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\Select;
use Modules\Blog\Filament\Resources\CategoryResource\Pages\ListCategories;
use Modules\Blog\Filament\Resources\CategoryResource\Pages\CreateCategory;
use Modules\Blog\Filament\Resources\CategoryResource\Pages\EditCategory;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
=======
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
=======
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Illuminate\Support\Str;
use Modules\Blog\Filament\Resources\CategoryResource\Pages;
use Modules\Blog\Models\Category;
use Modules\UI\Filament\Forms\Components\IconPicker;
use Modules\Xot\Filament\Resources\XotBaseResource;

class CategoryResource extends XotBaseResource
{
    use Translatable;

    // protected static ?string $model = Category::class;

<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-rectangle-stack';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';
>>>>>>> a12f125f4a (.)
=======
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-rectangle-stack';
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

    // protected static ?string $navigationGroup = 'Content';

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }

    public static function getFormFields(): array
    {
        return [
<<<<<<< HEAD
            TextInput::make('title')
=======
<<<<<<< HEAD
            TextInput::make('title')
=======
            Forms\Components\TextInput::make('title')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->required()
                ->maxLength(2048)
                ->reactive()
                ->unique()
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
                ->afterStateUpdated(function (Set $set, $state): void {
                    $set('slug', Str::slug((string) $state));
                }),
            TextInput::make('slug')
                ->required()
                ->maxLength(2048),
            Select::make('parent_id')
<<<<<<< HEAD
=======
=======
                ->afterStateUpdated(function (Forms\Set $set, $state): void {
                    $set('slug', Str::slug($state));
                }),
            Forms\Components\TextInput::make('slug')
                ->required()
                ->maxLength(2048),
            Forms\Components\Select::make('parent_id')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->label('Categoria Padre')
                ->options(
                    // Category::where('parent_id', null)->pluck('title', 'id')
                    // Category::tree()->get()->toTree()->pluck('title', 'id')
                    Category::getTreeCategoryOptions()
                )
                ->searchable(),
<<<<<<< HEAD
            TextInput::make('description')
=======
<<<<<<< HEAD
            TextInput::make('description')
=======
            Forms\Components\TextInput::make('description')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->maxLength(2048),
            SpatieMediaLibraryFileUpload::make('image')
                // ->image()
                // ->maxSize(5000)
                // ->multiple()
                // ->enableReordering()
                ->enableOpen()
                ->enableDownload()
                ->columnSpanFull()
                ->collection('category')
                // ->conversion('thumbnail')
                ->disk('uploads')
                ->directory('photos'),
            IconPicker::make('icon')
                ->helperText('Visualizza le icone disponibili di https://heroicons.com/')
                ->columnSpanFull()
            // ->layout(\Guava\FilamentIconPicker\Layout::ON_TOP)
            ,
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string|int, Component>
=======
<<<<<<< HEAD
     * @return array<string|int, \Filament\Schemas\Components\Component>
=======
     * @return array<string|int,\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
     */
    public static function getFormSchema(): array
    {
        return static::getFormFields();
    }

    public static function getPages(): array
    {
        return [
            // 'index' => Pages\ManageCategories::route('/'),
<<<<<<< HEAD
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'edit' => EditCategory::route('/{record}/edit'),
=======
<<<<<<< HEAD
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'edit' => EditCategory::route('/{record}/edit'),
=======
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
}
