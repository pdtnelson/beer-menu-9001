<?php

namespace Database\Factories;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BeerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Beer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = ['Plisner', 'IPA', 'Pale Ale', 'Lager', 'Porter', 'Stout', 'Sour'];
        return [
            'name' => $this->faker->name,
            'description' => Str::random(20),
            'type' => $types[mt_rand(0, sizeof($types) -1)],
            'ABV' => mt_rand (1*10, 15*10) / 10,
            'IBU' => mt_rand (1, 200),
        ];
    }
}
