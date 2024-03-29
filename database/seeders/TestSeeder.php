<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(ClassificationsTableSeeder::class);
        $this->call(InclusionSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
