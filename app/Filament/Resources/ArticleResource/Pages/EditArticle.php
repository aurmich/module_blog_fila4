<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\ArticleResource\Pages;

<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
=======
<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Actions;
use Filament\Forms\Components\Checkbox;
use Modules\Blog\Actions\Article\TranslateContentAction;
use Modules\Blog\Filament\Resources\ArticleResource;
use Modules\Blog\Models\Article;
use Modules\Lang\Filament\Resources\Pages\LangBaseEditRecord;

class EditArticle extends LangBaseEditRecord
{
    protected static string $resource = ArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            LocaleSwitcher::make(),
            DeleteAction::make(),
            Action::make('translate')
=======
<<<<<<< HEAD
            LocaleSwitcher::make(),
            DeleteAction::make(),
            Action::make('translate')
=======
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
            Actions\Action::make('translate')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->label('Copia Blocchi nelle altre lingue')
                ->tooltip('translate')
                ->icon('heroicon-o-language')
                ->requiresConfirmation()
                ->modalDescription('Assicurati che la versione italiana sia stata settata e salvata')
<<<<<<< HEAD
                ->schema([
=======
<<<<<<< HEAD
                ->schema([
=======
                ->form([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                    Checkbox::make('content_blocks')->inline(),
                    Checkbox::make('sidebar_blocks')->inline(),
                    Checkbox::make('footer_blocks')->inline(),
                ])
                ->action(function (Article $record, ArticleResource $article_resource, array $data): void {
                    app(TranslateContentAction::class)->execute(
                        'article',
                        $record->id, $article_resource->getTranslatableLocales(),
                        $data,
                        Article::class
                    );
                }),
        ];
    }
}
