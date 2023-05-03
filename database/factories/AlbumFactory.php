<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([
            'user_id'       =>          "\Illuminate\Support\HigherOrderCollectionProxy|mixed",
            'image'         =>          "string",
            'title'         =>          "string",
            'slug'         =>           "string",
            'description'   =>          "string",
            'is_status'     =>          "int"
        ]
    )]
    public function definition(): array
    {
        return [
            'user_id'       =>          User::all()->random()->id,
            'image'         =>          $this->faker->imageUrl,
            'title'         =>          $this->faker->title,
            'slug'         =>           $this->faker->slug,
            'description'   =>          $this->faker->realText,
            'is_status'     =>          $this->faker->numberBetween(0, 1),
        ];
    }
}
