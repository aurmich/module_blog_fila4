<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\TextWidgetResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
=======
<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Pages\Actions;
use Modules\Blog\Filament\Resources\TextWidgetResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTextWidgets extends XotBaseListRecords
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)

    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable(),
            'key' => TextColumn::make('key')->searchable(),
            'title' => TextColumn::make('title')->limit(40),
            'active' => IconColumn::make('active')->boolean(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
<<<<<<< HEAD
=======
=======
    
    public function getTableColumns(): array
    {
        return [
            'id' => \Filament\Tables\Columns\TextColumn::make('id')->sortable(),
            'key' => \Filament\Tables\Columns\TextColumn::make('key')->searchable(),
            'title' => \Filament\Tables\Columns\TextColumn::make('title')->limit(40),
            'active' => \Filament\Tables\Columns\IconColumn::make('active')->boolean(),
            'created_at' => \Filament\Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        ];
    }
    // protected static string $resource = TextWidgetResource::class;

   
}
