<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Article;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Category;
use Modules\Xot\Actions\GetViewAction;

class Lists extends Component
{
    public const ITEMS_PER_PAGE = 10;

    // All categories
    /**
     * @var Collection<Category>
     */
    public Collection $categories;

    // Variables keeping track of the current post query
    public int $postCount = 0;

    /**
     * @var \Illuminate\Support\Collection<int,\Illuminate\Support\Collection>
     */
    public \Illuminate\Support\Collection $postChunks;

    public int $queryCount = 0;

    public int $currentChunk = 0;

    // Currently selected category
    public ?Category $category = null;

    // Currently selected order
    public string $order = 'date_desc';

    public string $tpl;

    /**
     * @var array
     */
    protected $queryString = [
        'category' => ['except' => ''],
        'order' => ['except' => 'date_desc'],
    ];

    public function mount(): void
    {
        $this->categories = Category::all();
        $this->tpl = 'v1';

        $this->refreshArticles();
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'activeCategory' => $this->category,
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

    public function updatedCategory(): void
    {
        $this->refreshArticles();
    }

    public function updatedOrder(): void
    {
        $this->refreshArticles();
    }

    public function loadMore(): void
    {
<<<<<<< HEAD
        $this->currentChunk++;
=======
<<<<<<< HEAD
        $this->currentChunk++;
=======
        ++$this->currentChunk;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
    }

    // private function getActiveCategory(): ?Category
    // {
    // return $this->categories->first(fn ($i) => $i->slug === $this->category);
    //    return $this->category;
    // }

    /**
     * Summary of getArticleQuery.
     */
    private function getArticleQuery(): EloquentBuilder
    {
        $query = Article::published();
        if (($activeCategory = $this->category) instanceof Category) {
            $query = $query->whereCategoryId($activeCategory->id);
        }

<<<<<<< HEAD
        if ($this->order === 'date_asc') {
=======
<<<<<<< HEAD
        if ($this->order === 'date_asc') {
=======
        if ('date_asc' === $this->order) {
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
            return $query->orderBy('published_at', 'asc');
        }

        return $query->orderBy('published_at', 'desc');
    }

    private function refreshArticles(): void
    {
        // This will force the update of the `post-chunk` child components
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
        $this->queryCount++;
        $this->currentChunk = 0;

        $postIds = $this->getArticleQuery()->pluck('id');
        $this->postCount = $postIds->count(); /** @phpstan-ignore method.nonObject */
<<<<<<< HEAD
=======
=======
        ++$this->queryCount;
        $this->currentChunk = 0;

        $postIds = $this->getArticleQuery()->pluck('id');
        $this->postCount = $postIds->count();
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
        $this->postChunks = $postIds->chunk(self::ITEMS_PER_PAGE);
    }
}
