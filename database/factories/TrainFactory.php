<?php


namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainFactory extends Factory
{
    protected $model = Train::class;

    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'departure_station' => $this->faker->city,
            'arrival_station' => $this->faker->city,
            'departure_time' => $this->faker->time,
            'arrival_time' => $this->faker->time,
            'train_code' => $this->faker->unique()->word,
            'num_carriages' => $this->faker->numberBetween(1, 10),
            'on_time' => $this->faker->boolean,
            'cancelled' => $this->faker->boolean,
        ];
    }
}

