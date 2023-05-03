<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property mixed $description
 * @property int|mixed $is_status
 * @property mixed $id
 * @property mixed|string $image
 * @property mixed $title
 * @property mixed|null $slug
 */
class Album extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers;

    protected $fillable = [
        'user_id',
        'image',
        'title',
        'slug',
        'description',
        'is_status',
    ];


    /**
     * @return HasMany
     */
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    #[
        ArrayShape([
                'slug' => "string[]"
            ]
        )
    ]
    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName(): string
    {
        return $this->getSlugKeyName();
    }
}
