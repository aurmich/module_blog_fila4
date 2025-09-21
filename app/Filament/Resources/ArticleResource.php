<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

<<<<<<< HEAD
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Filament\Schemas\Components\Grid;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use BackedEnum;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Filament\Forms\Components\Grid;
=======
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Filament\Schemas\Components\Grid;
>>>>>>> a12f125f4a (.)
=======
use BackedEnum;
use LaraZeus\SpatieTranslatable\Resources\Concerns\Translatable;
use Filament\Forms\Components\Grid;
>>>>>>> b93ef594b4 (.)
>>>>>>> 336b9b7 (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
<<<<<<< HEAD
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Actions;
=======
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Actions;
>>>>>>> a12f125f4a (.)
=======
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Actions;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Form;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Resources\Concerns\Translatable;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
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

<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';
    // protected static ?string $navigationIcon = 'icon-article';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';
    // protected static \BackedEnum|string|null $navigationIcon = 'icon-article';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';
    // protected static ?string $navigationIcon = 'icon-article';
>>>>>>> a12f125f4a (.)
=======
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';
    // protected static \BackedEnum|string|null $navigationIcon = 'icon-article';
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    // protected static ?string $navigationIcon = 'icon-article';
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }

    public static function getFormFields(): array
    {
        return [
<<<<<<< HEAD
            Grid::make()->columns(2)->schema([
                TextInput::make('title')
=======
<<<<<<< HEAD
            Grid::make()->columns(2)->schema([
                TextInput::make('title')
=======
            Forms\Components\Grid::make()->columns(2)->schema([
                Forms\Components\TextInput::make('title')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                    ->columnSpan(1)
                    ->required()
                    ->lazy()
                    ->afterStateUpdated(static function ($set, $get, $state): void {
                        if ($get('slug')) {
                            return;
                        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
                        $set('slug', Str::slug((string) $state));
                    }),

                TextInput::make('slug')
                    ->columnSpan(1)
                    ->required(),
                DateTimePicker::make('closed_at')
<<<<<<< HEAD
=======
=======
                        $set('slug', Str::slug($state));
                    }),

                Forms\Components\TextInput::make('slug')
                    ->columnSpan(1)
                    ->required(),
                Forms\Components\DateTimePicker::make('closed_at')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                    ->columnSpan(1)
                    ->helperText('Determina fino a quando è possibile visualizzare l\'articolo')
                    ->required(),
                /*
                Forms\Components\TextInput::make('description')
                    ->columnSpanFull()
                    ->required()
                    ->helperText('Una breve descrizione dell\'articolo'),
                */
<<<<<<< HEAD
                DateTimePicker::make('published_at')
=======
<<<<<<< HEAD
                DateTimePicker::make('published_at')
=======
                Forms\Components\DateTimePicker::make('published_at')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
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
<<<<<<< HEAD
                Select::make('category_id')
=======
<<<<<<< HEAD
                Select::make('category_id')
=======
                Forms\Components\Select::make('category_id')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
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
<<<<<<< HEAD
                Toggle::make('is_featured')
=======
<<<<<<< HEAD
                Toggle::make('is_featured')
=======
                Forms\Components\Toggle::make('is_featured')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                    ->columnSpanFull()
                // ->required()
                ,
            ]),

<<<<<<< HEAD
            Section::make('Article Content')->schema([
                Actions::make([
=======
<<<<<<< HEAD
            Section::make('Article Content')->schema([
                Actions::make([
=======
            Forms\Components\Section::make('Article Content')->schema([
                Forms\Components\Actions::make([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
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

<<<<<<< HEAD
            Section::make('Article Sidebar')->schema([
                Actions::make([
=======
<<<<<<< HEAD
            Section::make('Article Sidebar')->schema([
                Actions::make([
=======
            Forms\Components\Section::make('Article Sidebar')->schema([
                Forms\Components\Actions::make([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
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

<<<<<<< HEAD
            Section::make('Article Footer')->schema([
                Actions::make([
=======
<<<<<<< HEAD
            Section::make('Article Footer')->schema([
                Actions::make([
=======
            Forms\Components\Section::make('Article Footer')->schema([
                Forms\Components\Actions::make([
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
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

<<<<<<< HEAD
            TextInput::make('main_image_url')
=======
<<<<<<< HEAD
            TextInput::make('main_image_url')
=======
            Forms\Components\TextInput::make('main_image_url')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
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
     * @return array<string|int, Component>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string|int, \Filament\Forms\Components\Component>
=======
     * @return array<string|int, \Filament\Schemas\Components\Component>
>>>>>>> a12f125f4a (.)
=======
     * @return array<string|int, \Filament\Forms\Components\Component>
>>>>>>> b93ef594b4 (.)
=======
     * @return array<string|int,\Filament\Forms\Components\Component>
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
     */
    public static function getFormSchema(): array
    {
        return static::getFormFields();
    }
}
