<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Services;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'first_package',
            'type' => 'package',
            'description' => 'lorem_ipsum',
            'price' => '250000',
            'number_of_person' => '250',
        ]);
    }
}
