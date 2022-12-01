<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => fake()->name(),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('admin');


        User::create([
            'name' => fake()->name(),
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('standard_user');

        User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => bcrypt('password')
        ])->assignRole('campsite_admin');
    }
}
