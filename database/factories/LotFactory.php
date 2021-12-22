<?php

namespace Database\Factories;

;
use App\Models\LotItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class LotFactory extends Factory
{
    protected $model = LotItem::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->words($nb = 2, $asText = true);
        $status=true;
       
        
        return [
            //
        'title' => $title,
      
        'category_id' => $this->faker->numberBetween(1, 8),
        'lot_ref' => $this->faker->numberBetween(1, 5),
        'artist' => $this->faker->text(50),
        'year' => $this->faker->year('now','-2 year'),
       
        'desc' => $this->faker->text(100),
        'additional' => $this->faker->text(100),
        'estimated' => $this->faker->numberBetween(10000,'-', 50000000),
        'minimum' => $this->faker->numberBetween(10000,'-', 50000000),

        'start_date' => $this->faker->dateTime('-1 week', '-2 month'),
        'end_date' => $this->faker->dateTimeBetween('+1 week', '+5 month'),
       
        'status' => $status,

        ]; 
    }
}
