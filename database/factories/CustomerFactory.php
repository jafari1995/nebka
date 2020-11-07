<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
//    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'postal_code' => $this->faker->numberBetween(123, 6484),
            'country' => $this->faker->country,
        ];
    }
}
