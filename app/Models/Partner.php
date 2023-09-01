<?php

namespace App\Models;

use Database\Factories\PartnerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Partner extends Model
{
    use HasFactory;

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

    protected static function newFactory(): PartnerFactory
    {
        return PartnerFactory::new();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function advertisement(): HasOne
    {
        return $this->hasOne(Advertisement::class)->withTrashed();
    }

    public function getRouteKeyName(): string
    {
        return 'name';
    }
}
