<?php

namespace Database\Factories;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    //protected $model = Item::class;
    public function definition()
    {
      
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->text(),
        ];
    }
}
