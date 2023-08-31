<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;
use App\Models\NewsCategory;

class NewsCategoryFactory extends Factory
{
    protected $model = NewsCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name = $this->faker->unique()->words($nb=3, $asText=true);
        $category_slug = Str::slug($category_name);
        return [
            'name' => $category_name,
            'slug' => $category_slug
        ];
    }
}
