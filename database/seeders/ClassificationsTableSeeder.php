<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classifications = [
            ['name' => 'chicken'],
            ['name' => 'beef'],
            ['name' => 'pork'],
            ['name' => 'fish'],
            // Add more data as needed
        ];

        // Insert data into the classifications table
        DB::table('classifications')->insert($classifications);
    }
}
