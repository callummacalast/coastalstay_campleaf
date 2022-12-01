<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'edit messages']);
        Permission::create(['name' => 'create messages']);
        Permission::create(['name' => 'delete messages']);


        $admin = Role::create(['name' => 'admin']);
        $campsite_admin = Role::create(['name' => 'campsite_admin']);
        $standard_user = Role::create(['name' => 'standard_user']);
    }
}
