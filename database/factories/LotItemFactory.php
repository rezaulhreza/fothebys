<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LotItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->words($nb = 2, $asText = true);
        $status=true;
        $image='upload/sample.jpg';
       
        
        return [
            //
        'title' => $title,
      
        'category_id' => $this->faker->numberBetween(1, 5),
        'lot_ref' => $this->faker->numberBetween(1, 5),
        'artist' => $this->faker->text(50),
        'subject' => $this->faker->unique()->words($nb = 1, $asText = true),
        'period' => $this->faker->unique()->words($nb = 1, $asText = true),
        'location' => $this->faker->unique()->words($nb = 1, $asText = true),
        'year' => $this->faker->year('now','-2 year'),
       'lot_thumbnail'=>$image,
        'desc' => $this->faker->text(100),
        'additional' => $this->faker->text(50),
        'estimated' => $this->faker->numberBetween(10000,'-', 50000000),
        'minimum' => $this->faker->numberBetween(10000,'-', 50000000),

        'start_date' => $this->faker->dateTimeThisYear('+1 week', '+2 month')->format('Y-m-d,'),
        'end_date' => $this->faker->dateTimeThisYear('+6 month', '+7 month')->format('Y-m-d,'),
       
        'status' => $status,

        ]; 
    }
}
