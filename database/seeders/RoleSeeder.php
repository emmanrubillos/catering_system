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
        $role = [
            ['name' => 'admin'],
            ['name' => 'costumer'],
            ['name' => 'staff'],
            ['name' => 'chef'],
        ];
        DB::table('role')->insert($role);
    }
}
