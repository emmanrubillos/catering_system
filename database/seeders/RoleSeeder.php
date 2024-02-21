<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define the roles
        $roles = [
            ['name' => 'admin'],
            ['name' => 'customer'],
            ['name' => 'staff'],
            ['name' => 'chef'],
        ];
        
        // Insert the roles into the "roles" table
        DB::table('roles')->insert($roles);
    }
}
