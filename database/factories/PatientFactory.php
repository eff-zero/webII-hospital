<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' => $this->faker->numberBetween(1 , 30),
            'name' => $this->faker->name(),
            'adress' => $this->faker->randomElement([$this->faker->bothify("Calle ## No ##-##"), $this->faker->bothify("Carrera ## No ##-##")]),
            'eps' => 'SURA',
            'comp_name' => $this->faker->name(),
            'comp_phone' => $this->faker->bothify('3#########'),
            'diagnosis' => $this->faker->paragraph(),
            'covid' => $this->faker->numberBetween(0, 1)
        ];
    }
}
