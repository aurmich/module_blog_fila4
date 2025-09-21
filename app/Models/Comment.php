<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Modules\Xot\Datas\XotData;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Modules\Blog\Database\Factories\CommentFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Modules\Media\Models\Media;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Xot\Contracts\UserContract;

/**
 * Modules\Blog\Models\Comment.
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
 * @property int $id
 * @property string $comment
 * @property int $post_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int|null $parent_id
 * @property Article|null $article
 * @property Profile|null $author
 * @property Collection<int, Comment> $childrens
 * @property int|null $childrens_count
 * @property Collection<int, Comment> $comments
 * @property int|null $comments_count
 * @property Comment|null $parentComment
 * @property UserContract|null $user
 *
 * @method static CommentFactory factory($count = null, $state = [])
 * @method static Builder|Comment newModelQuery()
 * @method static Builder|Comment newQuery()
 * @method static Builder|Comment onlyTrashed()
 * @method static Builder|Comment query()
 * @method static Builder|Comment whereComment($value)
 * @method static Builder|Comment whereCreatedAt($value)
 * @method static Builder|Comment whereId($value)
 * @method static Builder|Comment whereParentId($value)
 * @method static Builder|Comment wherePostId($value)
 * @method static Builder|Comment whereUpdatedAt($value)
 * @method static Builder|Comment whereUserId($value)
 * @method static Builder|Comment withTrashed()
 * @method static Builder|Comment withoutTrashed()
 *
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static Builder|Comment whereCreatedBy($value)
 * @method static Builder|Comment whereDeletedAt($value)
 * @method static Builder|Comment whereDeletedBy($value)
 * @method static Builder|Comment whereUpdatedBy($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property string|null $commentable_type
 * @property string|null $commentable_id
 * @property string|null $commentator_type
 * @property string|null $commentator_id
 * @property string $text
 * @property string|null $extra
 * @property string|null $approved_at
 * @property string $original_text
 *
 * @method static Builder|Comment whereApprovedAt($value)
 * @method static Builder|Comment whereCommentableId($value)
 * @method static Builder|Comment whereCommentableType($value)
 * @method static Builder|Comment whereCommentatorId($value)
 * @method static Builder|Comment whereCommentatorType($value)
 * @method static Builder|Comment whereExtra($value)
 * @method static Builder|Comment whereOriginalText($value)
 * @method static Builder|Comment whereText($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 *
 * @method static Comment|null first()
 * @method static Collection<int, Comment> get()
 * @method static Comment create(array $attributes = [])
 * @method static Comment firstOrCreate(array $attributes = [], array $values = [])
 * @method static Builder<static>|Comment where((string|Closure) $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static Builder<static>|Comment whereNotNull((string|Expression) $columns)
 * @method static int count(string $columns = '*')
<<<<<<< HEAD
=======
=======
 * @property int                                                    $id
 * @property string                                                 $comment
 * @property int                                                    $post_id
 * @property int                                                    $user_id
 * @property \Illuminate\Support\Carbon|null                        $created_at
 * @property \Illuminate\Support\Carbon|null                        $updated_at
 * @property int|null                                               $parent_id
 * @property Article|null                                           $article
 * @property Profile|null                                           $author
 * @property \Illuminate\Database\Eloquent\Collection<int, Comment> $childrens
 * @property int|null                                               $childrens_count
 * @property \Illuminate\Database\Eloquent\Collection<int, Comment> $comments
 * @property int|null                                               $comments_count
 * @property Comment|null                                           $parentComment
 * @property UserContract|null                                      $user
 *
 * @method static \Modules\Blog\Database\Factories\CommentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment   withoutTrashed()
 *
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedBy($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property string|null                                 $commentable_type
 * @property string|null                                 $commentable_id
 * @property string|null                                 $commentator_type
 * @property string|null                                 $commentator_id
 * @property string                                      $text
 * @property string|null                                 $extra
 * @property string|null                                 $approved_at
 * @property string                                      $original_text
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereApprovedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCommentatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCommentatorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereOriginalText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereText($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null                                                                $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null                                                                $updater
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 *
 * @mixin \Eloquent
 */
class Comment extends BaseModel
{
    protected $fillable = [
        'comment',
        'post_id',
        'user_id',
        'parent_id',
        'author_id',
        'article_id',
    ];

    public function user(): BelongsTo
    {
<<<<<<< HEAD
        $user_class = XotData::make()->getUserClass();
=======
<<<<<<< HEAD
        $user_class = XotData::make()->getUserClass();
=======
        $user_class = \Modules\Xot\Datas\XotData::make()->getUserClass();
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

        return $this->belongsTo($user_class);
    }

    /**
     * The comment that belong to the author.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'user_id'); // ->withTrashed();
    }

    /**
     * The comment that belong to the article.
     */
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function parentComment(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * The childrens of a comment(reply).
     */
    public function childrens(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /* -- to comment module
    public function comments(): HasMany
    {
        // return $this->hasMany(Comment::class, function ($query) {
        //     $query->whereNotNull('parent_id')->orderBy('created_at', 'desc');
        // });

        return $this->hasMany(self::class)
            ->whereNotNull('parent_id')
            ->orderBy('created_at', 'desc');
    }
    */
}
