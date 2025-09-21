<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Illuminate\Support\Carbon;
use Modules\Blog\Database\Factories\PostViewFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Modules\Media\Models\Media;
use Illuminate\Database\Eloquent\Collection;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;

/**
 * Modules\Blog\Models\PostView.
 *
 * @property int $id
 * @property string $ip_address
 * @property string $user_agent
 * @property int $post_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static PostViewFactory factory($count = null, $state = [])
 * @method static Builder|PostView newModelQuery()
 * @method static Builder|PostView newQuery()
 * @method static Builder|PostView onlyTrashed()
 * @method static Builder|PostView query()
 * @method static Builder|PostView whereCreatedAt($value)
 * @method static Builder|PostView whereId($value)
 * @method static Builder|PostView whereIpAddress($value)
 * @method static Builder|PostView wherePostId($value)
 * @method static Builder|PostView whereUpdatedAt($value)
 * @method static Builder|PostView whereUserAgent($value)
 * @method static Builder|PostView whereUserId($value)
 * @method static Builder|PostView withTrashed()
 * @method static Builder|PostView withoutTrashed()
 *
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static Builder|PostView whereCreatedBy($value)
 * @method static Builder|PostView whereDeletedAt($value)
 * @method static Builder|PostView whereDeletedBy($value)
 * @method static Builder|PostView whereUpdatedBy($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 *
 * @method static PostView|null first()
 * @method static Collection<int, PostView> get()
 * @method static PostView create(array $attributes = [])
 * @method static PostView firstOrCreate(array $attributes = [], array $values = [])
 * @method static Builder<static>|PostView where((string|Closure) $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static Builder<static>|PostView whereNotNull((string|Expression) $columns)
 * @method static int count(string $columns = '*')
<<<<<<< HEAD
=======
=======
/**
 * Modules\Blog\Models\PostView.
 *
 * @property int                             $id
 * @property string                          $ip_address
 * @property string                          $user_agent
 * @property int                             $post_id
 * @property int                             $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Modules\Blog\Database\Factories\PostViewFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView   withoutTrashed()
 *
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereUpdatedBy($value)
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
class PostView extends BaseModel
{
    protected $fillable = [
        'ip_address',
        'user_agent',
        'post_id',
        'user_id',
    ];
}
