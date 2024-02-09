<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = DB::table('role')->where('name', 'admin')->first();

        DB::table('users')->insert([
            'name' => 'adminko',
            'email' => 'Admin@example.com',
            'role' => '1',
            'password' => Hash::make('admin123'),

        ]);
    }
}
