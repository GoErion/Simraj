<?php

namespace App\Models;

use App\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Webpatser\LaravelUuid\HasUuids;

/**
 * @method static create(array $userData)
 * @method static where(string $string, false|string $fileHash)
 */
class Product extends Model
{
    use HasUuids;

    protected $fillable = [
        'name',
        'description',
        'usage',
        'active',
        'price',
        'file_path',
        'file_hash',
        'file_size',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'active' => StatusEnum::class,
    ];
}
