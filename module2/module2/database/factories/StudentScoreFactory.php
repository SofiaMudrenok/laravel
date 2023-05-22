<?php

namespace Database\Factories;

use App\Models\StudentScore;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentScore>
 */


class StudentScoreFactory extends Factory
{
    protected $model = StudentScore::class;

    public function definition()
    {
        return [
            'subject' => $this->faker->word,
            'score' => $this->faker->numberBetween(0, 100),
            'date' => $this->faker->dateTimeThisYear,
        ];
    }
}
