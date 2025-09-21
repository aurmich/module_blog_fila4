<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Modules\Blog\Filament\Resources\BannerResource\Pages\ListBanners;
use Modules\Blog\Filament\Resources\BannerResource\Pages\CreateBanner;
use Modules\Blog\Filament\Resources\BannerResource\Pages\EditBanner;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Modules\Blog\Filament\Resources\BannerResource\Pages;
use Modules\Blog\Models\Banner;
use Modules\Blog\Models\Category;
use Modules\Xot\Filament\Resources\XotBaseResource;

class BannerResource extends XotBaseResource
{
    // use Translatable;
    protected static ?string $model = Banner::class;

<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'ui-starbanner';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static \BackedEnum|string|null $navigationIcon = 'ui-starbanner';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'ui-starbanner';
>>>>>>> a12f125f4a (.)
=======
    protected static \BackedEnum|string|null $navigationIcon = 'ui-starbanner';
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $navigationIcon = 'ui-starbanner';
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

    // public static function getTranslatableLocales(): array
    // {
    //     return ['it', 'en'];
    // }
<<<<<<< HEAD
    /**
     * @return array<string|int, Component>
=======
<<<<<<< HEAD
    /**
     * @return array<string|int, \Filament\Schemas\Components\Component>
=======

    /**
     * @return array<string|int,\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
     */
    public static function getFormSchema(): array
    {
        return static::getFormFields();
    }

    /**
     * Ritorna i campi del form (compatibilità con XotBaseResource)
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
    public static function getFormFields(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
                Grid::make()->columns(2)->schema([
                    TextInput::make('title')
                        ->label(static::trans('fields.title'))
                        ->columnSpan(1)
                        ->required(),
                    TextInput::make('description')
<<<<<<< HEAD
=======
=======
                Forms\Components\Grid::make()->columns(2)->schema([
                    Forms\Components\TextInput::make('title')
                        ->label(static::trans('fields.title'))
                        ->columnSpan(1)
                        ->required(),
                    Forms\Components\TextInput::make('description')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                        ->columnSpan(1)
                        ->required(),
                    // Forms\Components\TextInput::make('action_text')
                    //     ->columnSpan(1)
                    //     ->required(),
<<<<<<< HEAD
                    Select::make('category_id')
=======
<<<<<<< HEAD
                    Select::make('category_id')
=======
                    Forms\Components\Select::make('category_id')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                        ->required()
                        ->options(Category::getTreeCategoryOptions()),
                    // Forms\Components\TextInput::make('link')
                    //     ->columnSpan(1)
                    // ->required(),
                    // ->helperText('bla bla bla'),
                    // Forms\Components\DateTimePicker::make('start_date')
                    //     ->columnSpan(1),
                    // Forms\Components\DateTimePicker::make('end_date')
                    //     ->columnSpan(1),
<<<<<<< HEAD
                    Toggle::make('hot_topic')
                        ->columnSpan(1),
                    Toggle::make('landing_banner')
=======
<<<<<<< HEAD
                    Toggle::make('hot_topic')
                        ->columnSpan(1),
                    Toggle::make('landing_banner')
=======
                    Forms\Components\Toggle::make('hot_topic')
                        ->columnSpan(1),
                    Forms\Components\Toggle::make('landing_banner')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                        ->columnSpan(1),

                    SpatieMediaLibraryFileUpload::make('image')
                        // ->image()
                        // ->maxSize(5000)
                        // ->multiple()
                        // ->enableReordering()
                        ->openable()
                        ->downloadable()
                        ->columnSpanFull()
                        // ->collection('avatars')
                        // ->conversion('thumbnail')
                        ->disk('uploads')
                        ->directory('photos')
                        ->collection('banner'),

                    // 'open_markets_count', // : 119,
                ]),
        ];
    }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('id')
    //                 ->label(static::trans('fields.id'))
    //                 ->sortable()
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('title')
    //                 ->label(static::trans('fields.title'))
    //                 ->sortable()
    //                 ->searchable(),
    //             Tables\Columns\TextColumn::make('category.title')
    //                 ->label(static::trans('fields.category.title'))
    //                 ->sortable()
    //                 ->searchable(),
    //             SpatieMediaLibraryImageColumn::make('image')
    //                 ->label(static::trans('fields.image'))
    //                 ->collection('banner'),
    //         ])
    //         ->filters([
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\BulkActionGroup::make([
    //                 Tables\Actions\DeleteBulkAction::make(),
    //             ]),
    //         ])
    //         ->emptyStateActions([
    //         ])
    //         ->reorderable('pos')
    //         ->defaultSort('pos', 'asc');
    // }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
<<<<<<< HEAD
            'index' => ListBanners::route('/'),
            'create' => CreateBanner::route('/create'),
            'edit' => EditBanner::route('/{record}/edit'),
=======
<<<<<<< HEAD
            'index' => ListBanners::route('/'),
            'create' => CreateBanner::route('/create'),
            'edit' => EditBanner::route('/{record}/edit'),
=======
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
}
