<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\ArticleResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use LaraZeus\SpatieTranslatable\Resources\Pages\ListRecords\Concerns\Translatable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions\CreateAction;
use Filament\Actions\Action;
use Filament\Tables\Columns\Column;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Table;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Modules\Blog\Actions\Article\ImportArticlesFromByJsonTextAction;
use Modules\Blog\Filament\Resources\ArticleResource;
use Modules\Blog\Models\Category;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListArticles extends XotBaseListRecords
{
<<<<<<< HEAD
    use Translatable;

    // protected static string $resource = ArticleResource::class;
=======
<<<<<<< HEAD
    use Translatable;

    // protected static string $resource = ArticleResource::class;
=======
    use ListRecords\Concerns\Translatable;

    // protected static string $resource = ArticleResource::class;

>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    /**
     * @return array<string, mixed>
     */
    /**
<<<<<<< HEAD
     * @return array<string, Column>
=======
<<<<<<< HEAD
     * @return array<string, Column>
=======
     * @return array<string, \Filament\Tables\Columns\Column>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
     */
    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            'id' => TextColumn::make('id'),
            'title' => TextColumn::make('title')
                ->wrap()
                ->sortable()
                ->searchable(),
            'category_title' => TextColumn::make('category.title')
                ->sortable()
                ->searchable(),
            'published_at' => TextColumn::make('published_at')
                ->dateTime()
                ->sortable(),
            'closed_at' => TextColumn::make('closed_at')
                ->dateTime()
                ->sortable(),
            'rewarded_at' => TextColumn::make('rewarded_at')
                ->dateTime()
                ->sortable(),
            'is_featured' => IconColumn::make('is_featured')
<<<<<<< HEAD
=======
=======
            'id' => Tables\Columns\TextColumn::make('id'),
            'title' => Tables\Columns\TextColumn::make('title')
                ->wrap()
                ->sortable()
                ->searchable(),
            'category_title' => Tables\Columns\TextColumn::make('category.title')
                ->sortable()
                ->searchable(),
            'published_at' => Tables\Columns\TextColumn::make('published_at')
                ->dateTime()
                ->sortable(),
            'closed_at' => Tables\Columns\TextColumn::make('closed_at')
                ->dateTime()
                ->sortable(),
            'rewarded_at' => Tables\Columns\TextColumn::make('rewarded_at')
                ->dateTime()
                ->sortable(),
            'is_featured' => Tables\Columns\IconColumn::make('is_featured')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->boolean()
                ->sortable(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
            Filter::make('is_featured')->toggle(),
            SelectFilter::make('Categoria')
=======
<<<<<<< HEAD
            Filter::make('is_featured')->toggle(),
            SelectFilter::make('Categoria')
=======
            Tables\Filters\Filter::make('is_featured')->toggle(),
            Tables\Filters\SelectFilter::make('Categoria')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->options(Category::getTreeCategoryOptions())
                ->attribute('category_id'),
        ];
    }

   

    /**
     * Get header actions.
     *
<<<<<<< HEAD
     * @return array<string, Action>
=======
<<<<<<< HEAD
     * @return array<string, Action>
=======
     * @return array<string, \Filament\Actions\Action>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
     */
    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            'locale_switcher' => LocaleSwitcher::make(),
            'create' => CreateAction::make(),
            'import' => Action::make('import')
                ->schema([
<<<<<<< HEAD
=======
=======
            'locale_switcher' => Actions\LocaleSwitcher::make(),
            'create' => Actions\CreateAction::make(),
            'import' => Actions\Action::make('import')
                ->form([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                    FileUpload::make('file')
                        ->label('')
                        // ->acceptedFileTypes(['application/json', 'json'])
                        ->imagePreviewHeight('250')
                        ->reactive()
                        ->afterStateUpdated(static function (callable $set, TemporaryUploadedFile $state): void {
                            $set('fileContent', File::get($state->getRealPath()));
                        }),
                    Textarea::make('fileContent'),
                ])
                ->label('')
                ->tooltip('Import')
                ->icon('heroicon-o-folder-open')
                ->action(static fn (array $data) => app(ImportArticlesFromByJsonTextAction::class)->execute($data['fileContent'])),
        ];
    }
}
