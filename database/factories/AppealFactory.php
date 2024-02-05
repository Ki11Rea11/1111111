<?php

namespace Database\Factories;

use App\Models\Appeal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appeal>
 */
class AppealFactory extends Factory
{
    protected $model = Appeal::class;

    /**
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'user_id' => random_int(1,2000),
            'user_name' => $this->faker->name(),
            'description' => $this->faker->text,
            'img_url' => $this->faker->imageUrl(),
        ];
    }
}
