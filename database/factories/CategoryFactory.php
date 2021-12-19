<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name=$this->faker->unique()->words($nb=2,$asText=true);
        $description=$this->faker->text(20);
        return [
            //
            'name'=>$category_name,
            'description'=>$description

        ];
    }
}
