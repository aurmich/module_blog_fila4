<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Illuminate\Support\Carbon;
use Modules\Blog\Database\Factories\UpvoteDownvoteFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Modules\Media\Models\Media;
use Illuminate\Database\Eloquent\Collection;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;

/**
 * Modules\Blog\Models\UpvoteDownvote.
 *
 * @property int $id
 * @property int $is_upvote
 * @property int $post_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static UpvoteDownvoteFactory factory($count = null, $state = [])
 * @method static Builder|UpvoteDownvote newModelQuery()
 * @method static Builder|UpvoteDownvote newQuery()
 * @method static Builder|UpvoteDownvote onlyTrashed()
 * @method static Builder|UpvoteDownvote query()
 * @method static Builder|UpvoteDownvote whereCreatedAt($value)
 * @method static Builder|UpvoteDownvote whereId($value)
 * @method static Builder|UpvoteDownvote whereIsUpvote($value)
 * @method static Builder|UpvoteDownvote wherePostId($value)
 * @method static Builder|UpvoteDownvote whereUpdatedAt($value)
 * @method static Builder|UpvoteDownvote whereUserId($value)
 * @method static Builder|UpvoteDownvote withTrashed()
 * @method static Builder|UpvoteDownvote withoutTrashed()
 *
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static Builder|UpvoteDownvote whereCreatedBy($value)
 * @method static Builder|UpvoteDownvote whereDeletedAt($value)
 * @method static Builder|UpvoteDownvote whereDeletedBy($value)
 * @method static Builder|UpvoteDownvote whereUpdatedBy($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 *
 * @method static UpvoteDownvote|null first()
 * @method static Collection<int, UpvoteDownvote> get()
 * @method static UpvoteDownvote create(array $attributes = [])
 * @method static UpvoteDownvote firstOrCreate(array $attributes = [], array $values = [])
 * @method static Builder<static>|UpvoteDownvote where((string|Closure) $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static Builder<static>|UpvoteDownvote whereNotNull((string|Expression) $columns)
 * @method static int count(string $columns = '*')
<<<<<<< HEAD
=======
=======
/**
 * Modules\Blog\Models\UpvoteDownvote.
 *
 * @property int                             $id
 * @property int                             $is_upvote
 * @property int                             $post_id
 * @property int                             $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Modules\Blog\Database\Factories\UpvoteDownvoteFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   query()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereIsUpvote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote   withoutTrashed()
 *
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereUpdatedBy($value)
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
class UpvoteDownvote extends BaseModel
{
    protected $fillable = ['is_upvote', 'post_id', 'user_id'];
}
