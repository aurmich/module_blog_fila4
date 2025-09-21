<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources\ArticleResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use LaraZeus\SpatieTranslatable\Resources\Pages\EditRecord\Concerns\Translatable;
use Filament\Schemas\Schema;
use LaraZeus\SpatieTranslatable\Actions\LocaleSwitcher;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Actions;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Infolists\Components\TextEntry;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Infolists\Infolist;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ViewRecord;
use Modules\Blog\Actions\Article\TranslateContentAction;
use Modules\Blog\Filament\Resources\ArticleResource;
use Modules\Blog\Models\Article;
// use Modules\Rating\Filament\Actions\Header\BetHeaderAction;
// use Modules\Rating\Filament\Actions\Header\WinHeaderAction;
use Modules\Rating\Filament\Resources\HasRatingResource\Widgets as RatingWidgets;

class ViewArticle extends ViewRecord
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
    use Translatable;

    protected static string $resource = ArticleResource::class;

    public function infolist(Schema $schema): Schema
<<<<<<< HEAD
    {
        return $schema
=======
=======
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ArticleResource::class;

    public function infolist(Infolist $infolist): Infolist
>>>>>>> origin/develop
    {
        return $infolist
>>>>>>> 336b9b7 (.)
            ->schema([
                // ...
                TextEntry::make('title'),
                TextEntry::make('closed_at'),
                TextEntry::make('rewarded_at'),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
            LocaleSwitcher::make(),
            EditAction::make(),
            DeleteAction::make(),
            // BetHeaderAction::make(),
            // WinHeaderAction::make(),
            Action::make('change_closed_at')
                ->tooltip('cambia data chiusura')
                ->label('')
                ->icon('heroicon-o-lock-closed')
                ->schema([
<<<<<<< HEAD
=======
=======
            Actions\LocaleSwitcher::make(),
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
            // BetHeaderAction::make(),
            // WinHeaderAction::make(),
            Actions\Action::make('change_closed_at')
                ->tooltip('cambia data chiusura')
                ->label('')
                ->icon('heroicon-o-lock-closed')
                ->form([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                    DateTimePicker::make('closed_at')
                        ->native(false),
                ])
                ->action(function (array $data, $record): void {
                    $record->update($data);
                }),
            /*
            Actions\Action::make('translate')
                ->label('Copia Blocchi nelle altre lingue')
                ->tooltip('translate')
                ->icon('heroicon-o-language')
                ->requiresConfirmation()
                ->modalDescription('Assicurati che la versione italiana sia stata settata e salvata')
                ->form([
                    Checkbox::make('content_blocks')->inline(),
                    Checkbox::make('sidebar_blocks')->inline(),
                    Checkbox::make('footer_blocks')->inline(),
                ])
                ->action(function (Article $record, ArticleResource $article_resource, array $data) {
                    return app(TranslateContentAction::class)->execute(
                        'article',
                        $record->id, $article_resource->getTranslatableLocales(),
                        $data,
                        Article::class
                    );
                }),
            */
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            RatingWidgets\StatsOverview::class,
        ];
    }
}
