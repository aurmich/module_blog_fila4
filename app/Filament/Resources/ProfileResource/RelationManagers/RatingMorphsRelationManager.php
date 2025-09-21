<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\ProfileResource\RelationManagers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms;
<<<<<<< HEAD
=======
=======
use Filament\Forms;
use Filament\Forms\Form;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class RatingMorphsRelationManager extends RelationManager
{
    // protected static string $relationship = 'ratings';
    protected static string $relationship = 'ratingMorphs';

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
<<<<<<< HEAD
=======
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                // Tables\Columns\TextColumn::make('id'),
<<<<<<< HEAD
                TextColumn::make('rating.title'),
=======
<<<<<<< HEAD
                TextColumn::make('rating.title'),
=======
                Tables\Columns\TextColumn::make('rating.title'),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                // Tables\Columns\TextColumn::make('pivot.user.name'),
                /*
                Tables\Columns\TextColumn::make('user.name')->default(function($record){
                    dddx($record);
                    if($record->pivot->user_id==null){
                        return null;
                    }
                    return $record->pivot->user->name;
                }),
                //*/
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
                TextColumn::make('value'),
                TextColumn::make('is_winner'),
                TextColumn::make('reward'),
                TextColumn::make('updated_at'),
<<<<<<< HEAD
=======
=======
                Tables\Columns\TextColumn::make('value'),
                Tables\Columns\TextColumn::make('is_winner'),
                Tables\Columns\TextColumn::make('reward'),
                Tables\Columns\TextColumn::make('updated_at'),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            ])
            ->filters([
            ])
            ->headerActions([
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
<<<<<<< HEAD
=======
=======
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ]),
            ]);
    }
}
