<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mainnew>
 */
class MainnewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');

        $text = "<p>" . $faker->realText() . "</p>" . "<p>" . $faker->realText() . "</p>";

        $title = $faker->catchPhrase();
        $slug = \Illuminate\Support\Str::slug($title);
        
        return [
            'title' => $title,
            'slug' => $slug,
            'image' => 'public/uploads/news/' . random_int(0, 10) . '.jpg',
            'text' => $text,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
