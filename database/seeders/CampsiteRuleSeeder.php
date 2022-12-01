<?php

namespace Database\Seeders;

use App\Models\CampsiteRule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampsiteRuleSeeder extends Seeder
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
                'title' => fake()->title(),
                'rule' => fake()->sentence()
            ]);
        }
    }
}
