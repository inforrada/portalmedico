<?php

namespace Database\Seeders;


use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
//        $admin = Role::create (['name' => 'admin', 'guard_name' => 'admin']);
//        $user = Role::create (['name' => 'user', 'guard_name' => 'user']);

        /// Asigno todo los permisos a admin

  //      $admin->givePermissionTo ('all');
        
    DB::insert('insert into role_has_permissions (role_id, permission_id) select 1, id from permissions', []);
    }
}
