<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;
use App\Models\Comment;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body'          => $this->faker->text($this->faker->numberBetween(15, 300)),
            'article_id'    => $this->faker->numberBetween(1, 5),
            'user_id'       => $this->faker->numberBetween(1, 2)
        ];
    }
}
