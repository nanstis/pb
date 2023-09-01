<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as EloquentSoftDeletes;
use Illuminate\Support\Facades\Route;

trait SoftDeletes
{
    use EloquentSoftDeletes;

    /**
     * Retrieve the model for a bound value.
     *
     * Modified from \Illuminate\Database\Eloquent\Model::resolveRouteBinding()
     *
     * @param mixed $value
     * @param string|null $field
     * @return Model|null
     */
    public function resolveRouteBinding($value, $field = null)
    {
        $routeTree = explode(".", Route::currentRouteName());
        if (end($routeTree) === 'restore') {
            return $this->onlyTrashed()->where($field ?? $this->getRouteKeyName(), $value)->first();
        }
        return $this->where($field ?? $this->getRouteKeyName(), $value)->first();
    }
}
