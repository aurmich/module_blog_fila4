<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

<<<<<<< HEAD
use Modules\Blog\Models\Menu;
=======
<<<<<<< HEAD
use Modules\Blog\Models\Menu;
=======
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
<<<<<<< HEAD
    protected $model = Menu::class;
=======
<<<<<<< HEAD
    protected $model = Menu::class;
=======
    protected $model = \Modules\Blog\Models\Menu::class;
>>>>>>> origin/develop
>>>>>>> 336b9b7 (.)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
