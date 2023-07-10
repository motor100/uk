<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');

        // Faker provider
        $faker1 = new \Faker\Generator();
        $faker1->addProvider(new \Faker\Provider\ru_RU\Person($faker1));
        $faker1->addProvider(new \Faker\Provider\ru_RU\Text($faker1));
        
        $name = $faker1->firstName();

        $text = $faker1->realText();
        
        return [
            'name' => $name,
            'text' => $text,
        ];
    }
}
