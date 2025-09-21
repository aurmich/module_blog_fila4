<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Spatie\Tags\Tag as BaseTag;

/**
 * Modules\Blog\Models\Tag.
 *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
 * @property int $id
 * @property array $name
 * @property array $slug
 * @property string|null $type
 * @property int|null $order_column
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static EloquentBuilder|Tag containing(string $name, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static EloquentBuilder|Tag ordered(string $direction = 'asc')
<<<<<<< HEAD
=======
=======
 * @property int                             $id
 * @property array                           $name
 * @property array                           $slug
 * @property string|null                     $type
 * @property int|null                        $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 *
 * @method static EloquentBuilder|Tag                       containing(string $name, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static EloquentBuilder|Tag                       ordered(string $direction = 'asc')
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
<<<<<<< HEAD
 * @method static EloquentBuilder|Tag whereLocale(string $column, string $locale)
 * @method static EloquentBuilder|Tag whereLocales(string $column, array $locales)
=======
<<<<<<< HEAD
 * @method static EloquentBuilder|Tag whereLocale(string $column, string $locale)
 * @method static EloquentBuilder|Tag whereLocales(string $column, array $locales)
=======
 * @method static EloquentBuilder|Tag                       whereLocale(string $column, string $locale)
 * @method static EloquentBuilder|Tag                       whereLocales(string $column, array $locales)
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedBy($value)
<<<<<<< HEAD
 * @method static EloquentBuilder|Tag withType(?string $type = null)
 *
 * @property mixed $translations
=======
<<<<<<< HEAD
 * @method static EloquentBuilder|Tag withType(?string $type = null)
 *
 * @property mixed $translations
=======
 * @method static EloquentBuilder|Tag                       withType(?string $type = null)
 *
 * @property mixed       $translations
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 * @property string|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereDeletedBy($value)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 336b9b7 (.)
 * @method static EloquentBuilder|Tag whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static EloquentBuilder|Tag whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 * @method static Tag|null first()
 * @method static Collection<int, Tag> get()
 * @method static Tag create(array $attributes = [])
 * @method static Tag firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag where((string|Closure) $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereNotNull((string|Expression) $columns)
 * @method static int count(string $columns = '*')
<<<<<<< HEAD
=======
=======
 * @method static EloquentBuilder|Tag                       whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static EloquentBuilder|Tag                       whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
 *
 * @mixin \Eloquent
 */
class Tag extends BaseTag
{
    /** @var string */
    protected $connection = 'blog';
}
