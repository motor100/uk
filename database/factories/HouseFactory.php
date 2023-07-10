<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ru_RU');
        
        // $paragraphs = $this->faker->paragraphs(rand(2, 6));
        $text = "<p>" . $faker->realText() . "</p>" . "<p>" . $faker->realText() . "</p>";
        // foreach ($paragraphs as $pr) {
        //     $text .= "<p>{$pr}</p>";
        // }

        $address = $this->faker->streetAddress();
        $slug = \Illuminate\Support\Str::slug($address);
        
        return [
            'address' => $address,
            'slug' => $slug,
            'image' => 'public/uploads/houses/' . random_int(0, 10) . '.jpg',
            'description' => $text,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
