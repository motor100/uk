<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Faker provider
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\ru_RU\Company($faker));
        $faker->addProvider(new \Faker\Provider\ru_RU\Text($faker));

        $job = 'Услуги ' . $faker->jobTitle();

        $slug =\Illuminate\Support\Str::slug($job);

        $text = $faker->realText();
        
        return [
            'title' => $job,
            'slug' => $slug,
            'image' => 'public/uploads/services/' . random_int(0, 10) . '.jpg',
            'description' => $text,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
