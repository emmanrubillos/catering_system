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
                'classification' => [
                    [
                        'name' => 'Foods and Catering',
                        'group' => 'Foods and Catering',
                    ],
                ],
                'items' => [
                    'Main Dish',
                    'Side Dish',
                    'Lechon',
                ]
            ],

            [
                'classification' => [
                    [
                        'name' => 'One Round',
                        'group' => 'Foods and Catering',
                    ],
                ],
                'items' => [
                    'Rice',
                    'Softdrinks',
                    'Desserts',
                ],
            ],
            [
                'classification' =>[ 
                    [ 
                        'name' => 'Seated Buffet',
                        'group' => 'Foods and Catering',
                    ],  
                ], 
                'items' => [
                
                        'Presidential',
                        'Couple',
                        'Parents',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Table Setup',
                            'group' => 'Foods and Catering',
                        ],
                    ],  
                'items' => [
                    'Couple Table',
                    'Parents Table',
                    'Presidential Table',
                    'Guest Table',
                    'Cake Table',
                ],
            ],
            [
                'classification' => 
                    [
                        [   
                            'name' => 'Table Setup w/ Tiffany Chairs',
                            'group' => 'Foods and Catering',
                        ],
                    ], 
                'items' => [
                    'Couple Table',
                    'Parents Table',
                    'Presidential Table',
                ],

            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Whole Set Entourage Attire',
                            'group' => 'Whole Set Entourage Attire',
                        ],
                    ], 

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
                'classification' =>
                    [
                        [
                            'name' => 'Accessories',
                            'group' => 'Whole Set Entourage Attire',
                        ],
                    ], 
                'items' => [
                    'Veils',
                    'Pillow',
                    'Garter',
                    'Cord',
                    'Arrhea',
                    'Mannequin',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Bouquet',
                            'group' => 'Bouquet',
                        ],
                    ],  
                'items' => [
                    'Bridal Bouquet',
                    'Maid of Honor',
                    'Bridesmaids',
                    'Flower Girls',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Corsage',
                            'group' => 'Corsage',
                        ],
                    ], 
                'items' => [
                    'Groom',
                    'Best Man',
                    'Groomsmen',
                    'Bearers',
                    'Principal Sponsors',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Church Decoration',
                            'group' => 'Church Decoration',
                        ],
                    ], 
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
                'classification' =>
                    [
                        [
                            'name' => 'Reception Decoration',
                            'group' => 'Reception Decoration',
                        ],
                    ], 
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
                    'Sparkler Machine',
                    'Confetti/Poppers',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Program and Entertainment',
                            'group' => 'Program and Entertainment',
                        ],
                    ], 
                'items' => [
                    'Reception Singer',
                    'Church Singer',
                    'Reception Host',
                    'Church Host',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Full Coordination',
                            'group' => 'Full Coordination',
                        ],
                    ], 
                'items' => [
                    'Full Coordination (on the Day)',
                    'Full Coordination (Plan before an event)',
                    'Full Wedding Coordination (Pre-wedding prep )',
                    'Head Coordinator',
                    'Assistance',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Photographic and Videographic',
                            'group' => 'Photographic and Videographic',
                        ],
                    ], 
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
                'classification' =>
                    [
                        [
                            'name' => 'Hair and Make-up',
                            'group' => 'Hair and Make-up',
                        ],
                    ], 
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
                'classification' =>
                    [
                        [
                            'name' => 'Freebies',
                            'group' => 'Freebies', 
                        ],
                    ], 
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
            //loop through classification list
            foreach ($inclusion['classification'] as $classification) {
                $classi = Classification::updateOrCreate($classification);

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
