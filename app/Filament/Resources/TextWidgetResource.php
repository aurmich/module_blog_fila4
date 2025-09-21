<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Modules\Blog\Filament\Resources\TextWidgetResource\Pages\ListTextWidgets;
use Modules\Blog\Filament\Resources\TextWidgetResource\Pages\CreateTextWidget;
use Modules\Blog\Filament\Resources\TextWidgetResource\Pages\ViewTextWidget;
use Modules\Blog\Filament\Resources\TextWidgetResource\Pages\EditTextWidget;
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Blog\Filament\Resources\TextWidgetResource\Pages;
use Modules\Blog\Models\TextWidget;
use Modules\Xot\Filament\Resources\XotBaseResource;

class TextWidgetResource extends XotBaseResource
{
    // protected static ?string $model = TextWidget::class;

<<<<<<< HEAD
    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static string | \BackedEnum | null $navigationIcon = 'ui-widgets';

    // protected static ?string $navigationGroup = 'Content';
    /**
     * @return array<string|int, Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static \BackedEnum|string|null $navigationIcon = 'ui-widgets';
=======
    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static string | \BackedEnum | null $navigationIcon = 'ui-widgets';
>>>>>>> a12f125f4a (.)
=======
    // protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static \BackedEnum|string|null $navigationIcon = 'ui-widgets';
>>>>>>> b93ef594b4 (.)

    // protected static ?string $navigationGroup = 'Content';
    /**
     * @return array<string|int, \Filament\Schemas\Components\Component>
=======
    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationIcon = 'ui-widgets';

    // protected static ?string $navigationGroup = 'Content';

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
            TextInput::make('key')
=======
<<<<<<< HEAD
            TextInput::make('key')
=======
            Forms\Components\TextInput::make('key')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->required()
                ->maxLength(255),
            // Forms\Components\FileUpload::make('image'),
            SpatieMediaLibraryFileUpload::make('image')
                // ->image()
                // ->maxSize(5000)
                // ->multiple()
                // ->enableReordering()
                ->enableOpen()
                ->enableDownload()
                ->columnSpanFull()
                // ->collection('avatars')
                // ->conversion('thumbnail')
                ->disk('uploads')
                ->directory('photos'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            TextInput::make('title')
                ->maxLength(2048),
            RichEditor::make('content'),
            Toggle::make('active')
<<<<<<< HEAD
=======
=======
            Forms\Components\TextInput::make('title')
                ->maxLength(2048),
            Forms\Components\RichEditor::make('content'),
            Forms\Components\Toggle::make('active')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->required(),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
                TextColumn::make('key'),
                IconColumn::make('active')
                    ->boolean(),
                TextColumn::make('updated_at')
<<<<<<< HEAD
=======
=======
                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                    ->dateTime(),
            ])
            ->filters([
            ])
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
<<<<<<< HEAD
=======
=======
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            'index' => ListTextWidgets::route('/'),
            'create' => CreateTextWidget::route('/create'),
            'view' => ViewTextWidget::route('/{record}'),
            'edit' => EditTextWidget::route('/{record}/edit'),
<<<<<<< HEAD
=======
=======
            'index' => Pages\ListTextWidgets::route('/'),
            'create' => Pages\CreateTextWidget::route('/create'),
            'view' => Pages\ViewTextWidget::route('/{record}'),
            'edit' => Pages\EditTextWidget::route('/{record}/edit'),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
}
