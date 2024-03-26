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
                        'name' => 'Lechon',
                        'group' => 'Foods and Catering',
                    ],
                ],
                'items' => [
                    'Pork Lechon (30kg)',    
                    'Pork Lechon (40kg)',
                    'Pork Lechon (50kg)',            
                ],
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
                    'Soft Drinks',
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
                            'name' => 'Primary Members',
                            'group' => 'Whole Set Entourage Attire',
                        ],
                    ], 

                'items' => [
                    'Brides Gown',
                    'Groom Suit',
                    'Maid of Honor',
                    'Best Man',
                    'Bearers',
                    '2 Mothers',
                    '2 Fathers',
                ],

            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Bridesmaids Flower Girls',
                            'group' => 'Whole Set Entourage Attire',
                        ],
                    ], 

                'items' => [
                    '3 Bridesmaids',
                    '5 Bridesmaids',
                    '7 Bridesmaids',
                    '3 Flower Girls',
                    '5 Flower Girls',
                    '7 Flower Girls',
                ],

            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Groomsmen',
                            'group' => 'Whole Set Entourage Attire',
                        ],
                    ], 

                'items' => [
                    '3 Groomsmen',
                    '5 Groomsmen',
                    '7 Groomsmen',
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
                            'group' => 'Floral Arrangements',
                        ],
                    ],  
                'items' => [
                    'Bridal Bouquet',
                    'Maid of Honor',
                    '3 Bridesmaids',
                    '5 Bridesmaids',
                    '7 Bridesmaids',
                    '3 Flower Girls',
                    '5 Flower Girls',
                    '7 Flower Girls',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Corsage',
                            'group' => 'Floral Arrangements',
                        ],
                    ], 
                'items' => [
                    'Groom',
                    'Best Man',
                    '3 Groomsmen',
                    '5 Groomsmen',
                    '7 Groomsmen',
                    'Bearers',
                    'Unli for Principal Sponsors',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Primary:',
                            'group' => 'Church Decoration',
                        ],
                    ], 
                'items' => [
                    'Flowers',
                    'Red Carpet',
                    'Arch Entrance',
                    'Candle for Matrimonial',
                    'Bridal Car Decoration',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Flowers Stand for Aisles:',
                            'group' => 'Church Decoration',
                        ],
                    ], 
                'items' => [
                    'Ordinary',
                    'Full Decoration',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Others:',
                            'group' => 'Church Decoration',
                        ],
                    ], 
                'items' => [
                    'Altar Decoration',
                    'Full Light Setup for Aisles',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Primary:',
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
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Ceiling Swag:',
                            'group' => 'Reception Decoration',
                        ],
                    ], 
                'items' => [
                    'Standard Decoration',
                    'Full Decoration',
                    'none'
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Others:',
                            'group' => 'Reception Decoration',
                        ],
                    ], 
                'items' => [
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
                            'name' => 'Hosts:',
                            'group' => 'Program and Entertainment',
                        ],
                    ], 
                'items' => [
                    'Reception Host',
                    'Church Host',
                    'Single Host',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Performers:',
                            'group' => 'Program and Entertainment',
                        ],
                    ], 
                'items' => [
                    '1 Reception Singer',
                    '2 Reception Singer',
                    '1 Church Singer',
                    '2 Church Singer',
                    'Live Band',
                    'None',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Personel:',
                            'group' => 'Bridal Event Coordination',
                        ],
                    ], 
                'items' => [
                    '1 Head Coordinator',
                    '3 Assistance',
                    '6 Assistance',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Types of Full Coordination:',
                            'group' => 'Bridal Event Coordination',
                        ],
                    ], 
                'items' => [
                    'On the Day Coordination Plan',
                    'Before the Event Coordination Plan',
                    'Pre Wedding Prep Coordination Plan',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Engagement Photoshoot:',
                            'group' => 'Visual Media Artist',
                        ],
                    ], 
                'items' => [
                    'Prenup Photo (2-3 Sets)',
                    'Prenup Photo (3-6 Sets) with stylist',
                    'Prenup Photo (6-8 Sets) with stylist',

                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Flash Drive Storage:',
                            'group' => 'Visual Media Artist',
                        ],
                    ], 
                'items' => [
                    '16 GigaBytes',
                    '32 GigaBytes',
                    '64 GigaBytes'
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Others:',
                            'group' => 'Visual Media Artist',
                        ],
                    ], 
                'items' => [
                    'Photo and View Coverage',
                    'Wedding Day Photo',
                    'Photo Highlights',
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
                            'name' => 'Hair and Make-up:',
                            'group' => 'Beauty Artist',
                        ],
                    ], 
                'items' => [
                    'Prenup',
                    'Bride',
                    'Maid of Honor',
                    'Mothers',
                    '3 Bridesmaids',
                    '5 Bridesmaids',
                    '7 Bridesmaids',
                    '3 Flower Girls',
                    '5 Flower Girls',
                    '7 Flower Girls',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Wedding Cake:',
                            'group' => 'Freebies', 
                        ],
                    ], 
                'items' => [
                    '2 Layers Cake',
                    '3 Layers Cake',
                    'none',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Bottle of Wine;',
                            'group' => 'Freebies', 
                        ],
                    ], 
                'items' => [   
                    '1 Bottle',              
                    '3 Bottle',
                    '6 Bottle',
                    'none',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Wedding Invitation:',
                            'group' => 'Freebies', 
                        ],
                    ], 
                'items' => [
                    '50 pieces',
                    '100 pieces',
                    'none',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Wedding Giveaways:',
                            'group' => 'Freebies', 
                        ],
                    ], 
                'items' => [
                    '50 pieces',
                    '100 pieces',
                    'none',
                ],
            ],
            [
                'classification' =>
                    [
                        [
                            'name' => 'Others:',
                            'group' => 'Freebies', 
                        ],
                    ], 
                'items' => [
                    'Pika-pika Corner',
                    'Grazing Table',
                    'Tiffany Chairs',
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
