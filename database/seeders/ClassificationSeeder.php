<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classification = [
            ['name' => 'Foods And Catering 250 Pax'],
            ['name' => 'Bouquet And Corsage'],
            ['name' => 'Church Décor'],
            ['name' => 'Whole Set Entourage Attire'],
            ['name' => 'Venue Décor'],
            ['name' => 'Professional/Photographer & Videographer'],
            ['name' => 'Hair & Make-Up'],
            ['name' => 'Program And Entertainment'],
            ['name' => 'Full Coordination'],
            ['name' => 'Full Lights and Sounds with DJ'],

            // Add more data as needed
        ];
            // Add more packages as needed


        // Insert data into the database
        foreach ($classification as $data) {
            // Assuming you have a table named 'classifications' to store package details
            DB::table('classifications')->insert($data);
        }
    }
}
