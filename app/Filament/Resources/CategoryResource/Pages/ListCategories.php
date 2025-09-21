<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\CategoryResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use LaraZeus\SpatieTranslatable\Resources\Pages\ListRecords\Concerns\Translatable;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions\CreateAction;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListCategories extends XotBaseListRecords
{
<<<<<<< HEAD
    use Translatable;
=======
<<<<<<< HEAD
    use Translatable;
=======
    use ListRecords\Concerns\Translatable;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

    /**
     * @return array<string, mixed>
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            'icon' => IconColumn::make('icon')
                ->icon(fn ($state) => $state),
            'title' => TextColumn::make('title')
                ->searchable()
                ->sortable(),
            'parent_title' => TextColumn::make('parent.title')
<<<<<<< HEAD
=======
=======
            'icon' => Tables\Columns\IconColumn::make('icon')
                ->icon(fn ($state) => $state),
            'title' => Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),
            'parent_title' => Tables\Columns\TextColumn::make('parent.title')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->searchable()
                ->sortable(),
            'image' => SpatieMediaLibraryImageColumn::make('image')
                ->collection('category'),
        ];
    }

    // public function table(Table $table): Table
    // {
    //     return $table
    //         ->columns($this->getTableColumns())
    //         ->filters([
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //             Tables\Actions\DeleteAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\DeleteBulkAction::make(),
    //         ]);
    // }

    /**
     
     */
    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            'locale_switcher' => LocaleSwitcher::make(),
            'create' => CreateAction::make(),
=======
<<<<<<< HEAD
            'locale_switcher' => LocaleSwitcher::make(),
            'create' => CreateAction::make(),
=======
            'locale_switcher' => Actions\LocaleSwitcher::make(),
            'create' => Actions\CreateAction::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
}
