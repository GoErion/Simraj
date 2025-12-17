<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webpatser\LaravelUuid\HasUuids;

/**
 * @method static create(array $array)
 */
class Forum extends Model
{
    use  HasUuids;

    protected $fillable = [
        'user_id',
        'topic',
        'content',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
