<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Eloquent;
use Spatie\ModelStatus\Status as BaseStatus;

/**
 * Modules\Blog\Models\Status.
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
 * @property int $id
 * @property string $name
 * @property string|null $reason
 * @property string $model_type
 * @property int $model_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property Model|Eloquent $model
 *
 * @method static Builder|Status newModelQuery()
 * @method static Builder|Status newQuery()
 * @method static Builder|Status query()
 * @method static Builder|Status whereCreatedAt($value)
 * @method static Builder|Status whereCreatedBy($value)
 * @method static Builder|Status whereId($value)
 * @method static Builder|Status whereModelId($value)
 * @method static Builder|Status whereModelType($value)
 * @method static Builder|Status whereName($value)
 * @method static Builder|Status whereReason($value)
 * @method static Builder|Status whereUpdatedAt($value)
 * @method static Builder|Status whereUpdatedBy($value)
 *
 * @property string $ip_address
 * @property string $user_agent
 * @property int $post_id
 * @property int $user_id
 *
 * @method static Builder|Status whereIpAddress($value)
 * @method static Builder|Status wherePostId($value)
 * @method static Builder|Status whereUserAgent($value)
 * @method static Builder|Status whereUserId($value)
<<<<<<< HEAD
=======
=======
 * @property int                                           $id
 * @property string                                        $name
 * @property string|null                                   $reason
 * @property string                                        $model_type
 * @property int                                           $model_id
 * @property \Illuminate\Support\Carbon|null               $created_at
 * @property \Illuminate\Support\Carbon|null               $updated_at
 * @property string|null                                   $updated_by
 * @property string|null                                   $created_by
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent $model
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedBy($value)
 *
 * @property string $ip_address
 * @property string $user_agent
 * @property int    $post_id
 * @property int    $user_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUserId($value)
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 *
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
 * @method static Builder|Status whereDeletedAt($value)
 * @method static Builder|Status whereDeletedBy($value)
 *
 * @mixin Eloquent
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereDeletedBy($value)
 *
 * @mixin \Eloquent
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 * @mixin Eloquent
 */
class Status extends BaseStatus
{
    /** @var string */
    protected $connection = 'blog';
}
