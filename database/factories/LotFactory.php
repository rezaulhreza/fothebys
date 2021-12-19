<?php

namespace Database\Factories;

use App\Models\Lot;
use Illuminate\Database\Eloquent\Factories\Factory;

class LotFactory extends Factory
{
    protected $model = Lot::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->words($nb = 2, $asText = true);
        $avail='yes';
        $period='morning';
       
        
        return [
            //
        'title' => $title,
        'auction_period'=>$period,
        'category_id' => $this->faker->numberBetween(1, 5),
        'lot_ref' => $this->faker->numberBetween(1, 5),
        'artist' => $this->faker->text(50),
        'year' => $this->faker->numberBetween(4, 4),
        'subject' => $this->faker->text(50),
        'description' => $this->faker->text(100),
        'additional_information' => $this->faker->text(100),
        'estimated_price' => $this->faker->numberBetween(10000,'-', 50000000),
        'location' => $this->faker->text(52),
        'start_date' => $this->faker->dateTime('-1 week', '-2 month'),
        'end_date' => $this->faker->dateTimeBetween('+1 week', '+5 month'),
        'bid' => $this->faker->numberBetween(100, 500),
        'has_availability' => $avail,

        ]; 
    }
}
