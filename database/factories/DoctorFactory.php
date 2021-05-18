<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'adress' => $this->faker->randomElement([$this->faker->bothify("Calle ## No ##-##"), $this->faker->bothify("Carrera ## No ##-##")]),
            'phone' => $this->faker->bothify('3#########'),
            'type_blood' => 'O+',
            'years_exp' => $this->faker->numberBetween(1, 60),
            'date' => $this->faker->date()
        ];
    }
}
