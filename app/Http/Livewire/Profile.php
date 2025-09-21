<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Illuminate\Contracts\View\View;
use Filament\Schemas\Schema;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
<<<<<<< HEAD
=======
=======
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Filament\Pages\Page;
use Illuminate\Support\Arr;
use Modules\Blog\Aggregates\ArticleAggregate;
use Modules\Blog\Datas\RatingArticleData;
// use Modules\Blog\Models\Profile;
use Modules\Blog\Models\Profile as BlogProfile;
use Modules\Xot\Actions\GetViewAction;
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
 * @property \Filament\Schemas\Schema $form
=======
<<<<<<< HEAD
 * @property \Filament\Schemas\Schema $form
=======
 * @property ComponentContainer $form
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 */
class Profile extends Page implements HasForms
{
    use InteractsWithForms;
    // public Article $article;

    public string $tpl = 'v1';

    // public string $user_id;
    public array $data = [];

    public BlogProfile $model;

<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';
>>>>>>> a12f125f4a (.)
=======
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

    // protected static string $view = 'filament.pages.edit-company';

    public function mount(
        BlogProfile $model,
        string $tpl = 'v1'): void
    {
        $this->model = $model;
        $this->tpl = $tpl;
        $this->data = $this->model->toArray();
        unset(
            $this->data['id'],
            $this->data['user_id'],
            $this->data['created_at'],
            $this->data['updated_at'],
            $this->data['updated_by'],
            $this->data['created_by'],
            $this->data['deleted_at'],
            $this->data['deleted_by'],

            $this->data['credits'],

            $this->data['slug'],
            $this->data['extra']
        );

        // $this->data['photo_profile'] = $this->model->getFirstMedia('photo_profile');

        // dddx($this->data);

        $this->form->fill($this->data);
    }

<<<<<<< HEAD
    public function render(): View
=======
<<<<<<< HEAD
    public function render(): View
=======
    public function render(): \Illuminate\Contracts\View\View
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'view' => $view,
        ];

<<<<<<< HEAD
        return view($view, $view_params);
=======
<<<<<<< HEAD
        return view((string) $view, (string) $view_params);
=======
        return view($view, $view_params);
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    }

    public function url(string $name, array $params): string
    {
        return '#';
    }

<<<<<<< HEAD
    public function form(Schema $form): Schema
=======
<<<<<<< HEAD
    public function form(Schema $form): Schema
=======
    public function form(Form $form): Form
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    {
        $schema = [];
        foreach (array_keys($this->data) as $key) {
            // dddx([$key, $field, $this->data]);
            // if(gettype($field) == 'float'){
            //     dddx([$key, $field]);
            // }
            $schema[] = TextInput::make($key)
                ->label($this->data[$key]);
            // ->suffix(fn () => Arr::get($this->data, 'ratings.'.$rating->id.'.value', 0))
            // ->extraInputAttributes(['class' => 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-700 focus:ring-green-700 sm:text-sm'])
            // ->disabled()
        }

        // dddx($schema);
        return $form
<<<<<<< HEAD
            ->components($schema)
=======
<<<<<<< HEAD
            ->components($schema)
=======
            ->schema($schema)
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $this->model->update($data);

        // $article_aggregate = ArticleAggregate::retrieve($this->article->id);
        // Assert::isArray($ratings_add = $data['ratings_add']);
        // foreach ($ratings_add as $rating_id => $rating) {
        //     $credit = $rating['value'];
        //     if (null != $credit) {
        //         $command = RatingArticleData::from([
        //             'userId' => $this->user_id,
        //             'articleId' => $this->article->id,
        //             'ratingId' => $rating_id,
        //             'credit' => $credit,
        //         ]);

        //         $article_aggregate->rating($command);
        //     }
        // }
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
<<<<<<< HEAD
                ->label('Save')
=======
<<<<<<< HEAD
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label') ?: '')
=======
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
                ->submit('save'),
        ];
    }
}
