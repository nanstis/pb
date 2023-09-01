<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AdvertCategoryChild extends Pivot
{
    public $table = 'advertisement_category_child';

    protected $fillable = [
        'advertisement_id',
        'category_child_id',
    ];
}
