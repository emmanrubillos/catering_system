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
            'name' => 'chicken pandan',
            'classification_id' => '1',
            'description' => 'Crispy on the outside, tender on the inside - our Chicken Pandan is a flavorful delight, infused with aromatic pandan leaves for a uniquely delicious experience.'
            ],
        ];

        DB::table('inclusions')->insert($inclusions);
    }
}
