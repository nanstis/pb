<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public $timestamps = false;

    public function advertisements(): BelongsToMany
    {
        return $this->belongsToMany(Advertisement::class)
            ->using(AdvertCategory::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(CategoryChild::class);
    }
}
