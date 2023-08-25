<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partner extends Model
{
    public $table = 'partners';

    protected $fillable = [
        'user_id',
        'name',
        'state',
        'address',
        'phone',
        'fax',
        'cover',
        'slogan',
        'summary',
        'description',
        'french',
        'english',
        'german',
        'italian',
        'other',
        'website',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'vimeo',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
