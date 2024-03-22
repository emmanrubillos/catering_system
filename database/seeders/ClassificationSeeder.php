<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            // Add more data as needed
        ];
    }
}
