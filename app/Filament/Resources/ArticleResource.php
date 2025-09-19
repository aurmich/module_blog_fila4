<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Actions;
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
>>>>>>> 5cc3f45 (.)
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Modules\Blog\Filament\Fields\ArticleContent;
use Modules\Blog\Filament\Fields\ArticleFooter;
use Modules\Blog\Filament\Fields\ArticleSidebar;
use Modules\Blog\Filament\Resources\ArticleResource\Pages;
use Modules\Blog\Filament\Resources\ArticleResource\RelationManagers;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Category;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ArticleResource extends XotBaseResource
{
    use Translatable;

    protected static ?string $model = Article::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';
    // protected static ?string $navigationIcon = 'icon-article';

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }

    public static function getFormFields(): array
    {
        return [
            Grid::make()->columns(2)->schema([
                TextInput::make('title')
                    ->columnSpan(1)
                    ->required()
                    ->lazy()
                    ->afterStateUpdated(static function ($set, $get, $state): void {
                        if ($get('slug')) {
                            return;
                        }
                        $set('slug', Str::slug((string) $state));
                    }),

                TextInput::make('slug')
                    ->columnSpan(1)
                    ->required(),
                DateTimePicker::make('closed_at')
                    ->columnSpan(1)
                    ->helperText('Determina fino a quando è possibile visualizzare l\'articolo')
                    ->required(),
                /*
                Forms\Components\TextInput::make('description')
                    ->columnSpanFull()
                    ->required()
                    ->helperText('Una breve descrizione dell\'articolo'),
                */
                DateTimePicker::make('published_at')
                    ->columnSpan(1)
                    ->nullable()
                // ->required()
                ,
                // Forms\Components\DateTimePicker::make('rewarded_at')
                //     ->nullable()
                //     ->columnSpan(1),

                /*
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->columnSpan(1)
                    ->required(),
                */
                Select::make('category_id')
                    // ->multiple()
                    ->required()
                    // ->relationship('categories', 'title')
                    ->options(Category::getTreeCategoryOptions())
                    ->createOptionForm(CategoryResource::getFormFields())
                    ->createOptionUsing(function (array $data) {
                        $category = Category::create($data);
                        return $category->getKey();
                    }),
                // SpatieTagsInput::make('tags'),
                Toggle::make('is_featured')
                    ->columnSpanFull()
                // ->required()
                ,
            ]),

            Section::make('Article Content')->schema([
                Actions::make([
                    /*
                    InlinePreviewAction::make()
                        ->label('Preview Content Blocks')
                        ->builderName('content_blocks'),
                    */
                ])
                    ->columnSpanFull()
                    ->alignRight(),

                ArticleContent::make('content_blocks')
                    ->label('Content')
                    ->required()
                    ->columnSpanFull(),
            ])->collapsible(),

            Section::make('Article Sidebar')->schema([
                Actions::make([
                    /*
                    InlinePreviewAction::make()
                        ->label('Preview Content Blocks')
                        ->builderName('content_blocks'),
                    */
                ])
                    ->columnSpanFull()
                    ->alignRight(),

                ArticleSidebar::make('sidebar_blocks')
                    ->label('Sidebar')
                    // ->required()
                    ->columnSpanFull(),
            ])->collapsible(),

            Section::make('Article Footer')->schema([
                Actions::make([
                    /*
                    InlinePreviewAction::make()
                        ->label('Open Footer Editor')
                        ->builderName('footer_blocks'),
                    */
                ])
                    ->columnSpanFull()
                    ->alignRight(),

                ArticleFooter::make('footer_blocks')
                    ->label('Footer')
                    ->columnSpanFull(),
            ])->collapsible(),

            TextInput::make('main_image_url')
                ->label('Main image URL')
                ->columnSpanFull(),

            // Forms\Components\FileUpload::make('main_image_upload')
            //     ->label('Main image upload')
            //     ->columnSpanFull(),
            SpatieMediaLibraryFileUpload::make('main_image_upload')
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
                ->collection('main_image_upload')
            // ->preserveFilenames()
            ,
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string|int, \Filament\Schemas\Components\Component>
=======
     * @return array<string|int, Component>
>>>>>>> 5cc3f45 (.)
     */
    public static function getFormSchema(): array
    {
        return static::getFormFields();
    }
}
