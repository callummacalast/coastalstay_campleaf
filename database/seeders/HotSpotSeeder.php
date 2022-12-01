<?php

namespace Database\Seeders;

use App\Models\HotSpot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotSpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            HotSpot::create([
                'name' => fake()->name(),
                'description' => fake()->paragraph(),
                'status' => fake()->randomElement(['live', 'pending']),
                'postcode' => fake()->postcode(),
                'lat' => fake()->latitude(),
                'lng' => fake()->longitude()
            ]);
        }
    }
}
