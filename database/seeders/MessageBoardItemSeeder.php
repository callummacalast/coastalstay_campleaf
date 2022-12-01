<?php

namespace Database\Seeders;

use App\Models\MessageBoardItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageBoardItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            MessageBoardItem::create([
                'title' => fake()->sentence(),
                'message' => fake()->paragraph()
            ]);
        }
    }
}
