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
        // $adminRole = DB::table('role')->where('name', 'admin')->first();

        DB::table('users')->insert([
            'first_name' => 'admin',
            'role_id' => '1',
            'middle_name' => 'lage',
            'last_name' => 'ko',
            'contact_number' => '12345',
            'address' => 'Brgy.Eastern',
            'email' => 'Admin@example.com',
            'password' => Hash::make('admin123'),

        ]);
    }
}
