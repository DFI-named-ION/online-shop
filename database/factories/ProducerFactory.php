<?php

namespace Database\Factories;

use App\Models\Producer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class ProducerFactory extends Factory
{
    protected $model = Producer::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words($nb=5, $asText=true);
        $slug = Str::slug($name);
        return [
            'name'        => $name,
            'slug'        => $slug,
            'description' => $this->faker->text(500),
        ];
    }
}
