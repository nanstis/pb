<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CategoryChild extends Model
{
    public $timestamps = false;

    public function advertisements(): BelongsToMany
    {
        return $this->belongsToMany(Advertisement::class)
            ->using(AdvertCategoryChild::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
