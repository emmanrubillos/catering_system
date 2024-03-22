<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InclusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inclusions = [
            [
                'name' => 'Chicken Pandan',
                'description' => 'Crispy on the outside, tender on the inside - our Chicken Pandan is a flavorful delight, infused with aromatic pandan leaves for a uniquely delicious experience.'
            ],

            [
                'name' => 'Baked Chicken',
                'description' => 'Enjoy exceptional cuisine tailored to your every occasion. Whether its a wedding, christening, birthday, anniversary, or any special event. Let us create unforgettable'
            ],
        ];

        DB::table('inclusions')->insert($inclusions);
    }
}
