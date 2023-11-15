<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permission::create (['name' => 'userView',   'guard_name' => 'userView']);
        Permission::create (['name' => 'userCreate', 'guard_name' => 'userCreate']);
        Permission::create (['name' => 'userEdit',   'guard_name' => 'userEdit']);
        Permission::create (['name' => 'userDelete', 'guard_name' => 'userDelete']);
 
        Permission::create (['name' => 'doctorView',   'guard_name' => 'doctorView']);
        Permission::create (['name' => 'doctorCreate', 'guard_name' => 'doctorCreate']);
        Permission::create (['name' => 'doctorEdit',   'guard_name' => 'doctorEdit']);
        Permission::create (['name' => 'doctorDelete', 'guard_name' => 'doctorDelete']);
 
    }
}
