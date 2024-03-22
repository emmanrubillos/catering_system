<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Classification;
use App\Models\Inclusion;
use App\Models\InclusionClassification;


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
                'classification' => ['Foods and Catering',],
                'items' => [
                    'Main Dish',
                    'Side Dish',
                    'Lechon',
                ]
            ],

            [
                'classification' => ['One Round', 'Foods and Catering'],
                'items' => [
                    'Rice',
                    'Softdrinks',
                    'Desserts',
                ],
            ],
            [
                'classification' => ['Seated Buffet', 'Foods and Catering'],
                'items' => [
                    'Presidential',
                    'Couple',
                    'Parents',
                ],
            ],
            [
                'classification' => ['Table Setup', 'Foods and Catering'],
                'items' => [
                    'Couple Table',
                    'Parents Table',
                    'Presidential Table',
                    'Guest Table',
                    'Cake Table',
                ],
            ],
            [
                'classification' => ['Table Setup w/ Tiffany Charis', 'Foods and Catering'],
                'items' => [
                    'Couple Table',
                    'Parents Table',
                    'Presidential Table',
                ],

            ],
            [
                'classification' => ['Whole Set Entourage Attire'],
                'items' => [
                    'Brides Gown',
                    'Groom Suit',
                    'Maid of Honor',
                    'Best Man',
                    'Bridesmaids',
                    'Flower Girls',
                    'Groomsmen',
                    'Bearers',
                    '2 Mothers',
                    '2 Fathers',
                ],

            ],
            [
                'classification' => ['Accessories', 'Whole Set Entourage Attire'],
                'items' => [
                    'Veils',
                    'Pillos',
                    'Garter',
                    'Cord',
                    'Arrhea',
                    'Mannequin',
                ],
            ],
            [
                'classification' => ['Bouquet'],
                'items' => [
                    'Bridal Bouquet',
                    'Maid of Honor',
                    'Bridesmaids',
                    'Flower Girls',
                ],
            ],
            [
                'classification' => ['Corsage'],
                'items' => [
                    'Groom',
                    'Best Man',
                    'Groomsmen',
                    'Bearers',
                    'Principal Sponsors',
                ],
            ],
            [
                'classification' => ['Church Decoration'],
                'items' => [
                    'Flowers',
                    'Arch Entrance',
                    'Candle for Matrimonial',
                    'Flowers Stand for Aisles (Ordinary)',
                    'Flowers Stand for Aisles (Full Decor)',
                    'Altar Decoration',
                    'Full Light Setup for Aisles',
                    'Red Carpet',
                    'Bridal Car Decoration',
                ],
            ],
            [
                'classification' => ['Reception Decoration'],
                'items' => [
                    'Presidential Table',
                    'Arch Entrance',
                    'Table Center Pieces',
                    'Backdrop',
                    'Couple Name/Initials',
                    'Love Seat',
                    'Red Carpet',
                    'Ceiling Swag with Decoration',
                    'LED Wall',
                    'Low Lying Fog Machine',
                    'Sparkler Maching',
                    'Confetti/Poppers',
                ],
            ],
            [
                'classification' => ['Program and Entertainment'],
                'items' => [
                    'Reception Singer',
                    'Chruch Singer',
                    'Reception Host',
                    'Chruch Host',
                ],
            ],
            [
                'classification' => ['Full Coordination'],
                'items' => [
                    'Full Coordination (on the Day)',
                    'Full Coordination (Plan before an event)',
                    'Full Wedding Coordination (Pre-wedding prep )',
                    'Head Coordinator',
                    'Assistance',
                ],
            ],
            [
                'classification' => ['Photograhics and Videograhics'],
                'items' => [
                    'Pre-Photo',
                    'Photo and View Coverage',
                    'Wedding Day Photo',
                    'Photo Highlights',
                    'Flash Drive Storage',
                    'SDE (same day edit)',
                    'Printed Copies 180pcs',
                    '1 Photo Album',
                    '1 Photo Frame for Couple',
                    '1 Guest Book',
                    'PhotoBooth',
                ],
            ],
            [
                'classification' => ['Hair and Make-up'],
                'items' => [
                    'Prenup',
                    'Bride',
                    'Maid of Honor',
                    '2 Mothers',
                    'Bridesmaids',
                    'Flower Girls',
                ],
            ],
            [
                'classification' => ['Freebies'],
                'items' => [
                    'Layers Wedding Cake',
                    'Bottle of Wine',
                    'Wedding Invitation',
                    'Wedding Giveaways',
                    'Pika-pika Corner',
                    'Grazing Table',
                ],
            ],
        ];




        //loop through inclusions list
        foreach ($inclusions as $inclusion) {
            //loop through classificaiton list
            foreach ($inclusion['classification'] as $classification) {
                $classi = Classification::updateOrCreate([
                    'name' => $classification
                ]);

                foreach ($inclusion['items'] as $item) {
                    $itemData = Inclusion::where('name', $item)->first();

                    if (empty($itemData)) {
                        $itemData = Inclusion::create([
                            'name' => $item,
                            'description' => ''
                        ]);
                    }

                    $exists = InclusionClassification::where('inclusion_id', $itemData->id)
                        ->where('classification_id', $classi->id)->first();

                    if (empty($exists)) {
                        $itemData->inclusionClassifications()->create([
                            'classification_id' => $classi->id
                        ]);
                    }
                }
            }
        }
    }
}
