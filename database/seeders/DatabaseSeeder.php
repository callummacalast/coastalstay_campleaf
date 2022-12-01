<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CampsiteRule;
use App\Models\ContactMessage;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CampsiteRuleSeeder::class);
        $this->call(ContactMessageSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(MessageBoardItemSeeder::class);
        $this->call(HotSpotSeeder::class);
        $this->call(AdminUserSeeder::class);
    }
}
