<?php

declare(strict_types=1);

namespace Modules\Blog\Actions\ParentChilds;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\QueueableAction\QueueableAction;

class GetTreeOptions
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * @param Model&\Kalnoy\Nestedset\NodeTrait $model
     * @return array
     */
=======
    <<<<<<< HEAD
    * @param Model&\Kalnoy\Nestedset\NodeTrait $model
    =======
     * @param Model&\Kalnoy\Nestedset\NodeTrait $model
     * >>>>>>> origin/develop
    * @return array
    */
>>>>>>> 336b9b7 (.)
    public function execute(Model $model): array
    {
        $models = $model::tree()->get()->toTree();
        $results = [];
        foreach ($models as $mod) {
            $results[$mod->id] = $mod->title;
            foreach ($mod->children as $child) {
                $results[$child->id] = '--------->'.$child->title;
                foreach ($child->children as $cld) {
                    $results[$cld->id] = '----------------->'.$cld->title;
                    foreach ($cld->children as $c) {
                        $results[$c->id] = '------------------------->'.$c->title;
                    }
                }
            }
        }

        return $results;
    }
}
