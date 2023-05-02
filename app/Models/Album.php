<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $description
 * @property int|mixed $is_status
 * @property mixed $id
 * @property mixed|string $image
 */
class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'description',
        'is_status',
    ];


    /**
     * @return HasMany
     */
    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }

}
