<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $question=$this->faker->text(10);
        $answer=$this->faker->text(50);
        return [
            //
            'question'=>$question,
            'answer'=>$answer

        ];
    }
}
