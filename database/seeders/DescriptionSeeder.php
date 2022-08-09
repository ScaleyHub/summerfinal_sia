<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Description;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $descriptions =[
            [
                'guitar_id' => '1',
                'brand' => 'Ibanez',
                'pickup' =>'2 Humbuckers, 1 SC',
                'body' => 'Basswood',
                'neck' =>'Bolt-on',
                'year' =>'2003'
            ],
            [
                'guitar_id' => '2',
                'brand' => 'Fender',
                'pickup' => 'Squier HB',
                'body' => 'Basswood',
                'neck' =>'Modern C',
                'year' =>'1990'
            ]
            ,
            [
                'guitar_id' => '3',
                'brand' => 'Gretsch',
                'pickup' => 'BlackTop Broadton',
                'body' => 'Mahogany',
                'neck' =>'V-Stoptail',
                'year' =>'1989'
            ]
            ,
            [
                'guitar_id' => '4',
                'brand' => 'Paul Reed Smith (PRS)',
                'pickup' => 'Wayblade SS',
                'body' => 'Mahogany',
                'neck' =>'Wide Thin',
                'year' =>'2005'
            ]
    
            ];

            foreach($descriptions as $d) {
                Description::create($d);
            }
    }
}
