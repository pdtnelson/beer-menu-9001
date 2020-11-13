<?php

namespace Database\Factories;

use App\Models\Retailer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RetailerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Retailer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cities = ['Boise', 'Seattle', 'Denver', 'Columbus', 'Portland (ME)', 'Victor', 'Sun Valley', 'WinterPark'];
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->text,
            'city' => $cities[mt_rand(0, sizeof($cities) - 1)],
        ];
    }
}
