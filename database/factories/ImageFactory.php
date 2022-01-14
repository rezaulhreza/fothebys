<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
     
        $image='upload/sample.jpg';
     
        return [
            //
            'lot_id' => $this->faker->numberBetween(1, 20),
            'photo_name'=>$image,

        ];
        
    }
}
