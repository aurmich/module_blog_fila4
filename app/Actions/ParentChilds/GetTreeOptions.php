<?php

declare(strict_types=1);

namespace Modules\Blog\Actions\ParentChilds;

use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

class GetTreeOptions
{
    use QueueableAction;

    /**
     * @param  Model  $model  - Model that uses HasRecursiveRelationships
     * @return array<int, string>
     */
    public function execute(Model $model): array
    {
        // Use tree() method for models with HasRecursiveRelationships
        if (method_exists($model, 'tree')) {
            /** @var \Illuminate\Database\Eloquent\Collection $models */
            $models = $model->tree()->get()->toTree();
        } else {
            // Fallback for models without tree functionality
            $models = $model::all();
        }

        $results = [];
        foreach ($models as $mod) {
            if (property_exists($mod, 'id') && property_exists($mod, 'title')) {
                $results[$mod->id] = $mod->title;

                // Handle children if they exist
                if (property_exists($mod, 'children') && $mod->children) {
                    foreach ($mod->children as $child) {
                        if (property_exists($child, 'id') && property_exists($child, 'title')) {
                            $results[$child->id] = '--------->'.$child->title;

                            if (property_exists($child, 'children') && $child->children) {
                                foreach ($child->children as $cld) {
                                    if (property_exists($cld, 'id') && property_exists($cld, 'title')) {
                                        $results[$cld->id] = '----------------->'.$cld->title;

                                        if (property_exists($cld, 'children') && $cld->children) {
                                            foreach ($cld->children as $c) {
                                                if (property_exists($c, 'id') && property_exists($c, 'title')) {
                                                    $results[$c->id] = '------------------------->'.$c->title;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        return $results;
    }
}
