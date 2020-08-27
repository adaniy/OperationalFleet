<?php


namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;


class AutomjetiScope implements Scope
{
    public function apply(\Illuminate\Database\Eloquent\Builder $builder, \Illuminate\Database\Eloquent\Model $model)
    {
//        $builder->where('deleted_at', null);
    }
}
