<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'short_description' => $this->faker->sentence,
            'long_description' => $this->faker->paragraph,
            //'body' => $this->faker->paragraph,
            'image' => '/images/pexels-vladislav-murashko-5990677.jpg',
            'thumbnail' => '/thumbnails/pexels-vladislav-murashko-5990677.jpg',

            'created_at' => Carbon::now()->subDays(rand(5, 14)),
            'updated_at' => Carbon::now()->subDays(rand(8, 9)),


        ];
    }
}
