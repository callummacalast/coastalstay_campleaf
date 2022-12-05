<?php

namespace Database\Seeders;

use App\Models\CampsiteRule;
use App\Models\Rule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            CampsiteRule::create([
                'name' => fake()->randomElement(['Please Keep Dogs on leads', 'Please do not feed the goats', 'Park in the designated parking zones', 'No noise after 10pm']),
                'rule' => fake()->sentence(),
            ]);
        }
    }
}
