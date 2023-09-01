<?php

namespace App\Models;

use Database\Factories\AdvertCategoryChildFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AdvertCategoryChild extends Pivot
{
    use HasFactory;

    public $table = 'advertisement_category_child';

    protected $fillable = [
        'advertisement_id',
        'category_child_id',
    ];

    protected static function newFactory(): AdvertCategoryChildFactory
    {
        return AdvertCategoryChildFactory::new();
    }
}
