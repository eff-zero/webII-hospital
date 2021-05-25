<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Hospital::factory()->create();
        Doctor::factory(30)->create(['hospital_id' => Hospital::first()]);
        Patient::factory(50)->create();
    }
}
