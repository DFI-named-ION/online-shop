<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;
use App\Models\Article;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'short_title'        => $this->faker->unique()->words($nb=4, $asText=true),
            'title'              => $this->faker->unique()->words($nb=10, $asText=true),
            'short_description'  => $this->faker->text(250),
            'description'        => $this->faker->text(500),
            'author'             => $this->faker->text(50),
            'image'              => 'article_'.$this->faker->unique()->numberBetween(1, 5).'.jpg',
            'category_id'        => $this->faker->numberBetween(1, 5),
        ];
    }
}
