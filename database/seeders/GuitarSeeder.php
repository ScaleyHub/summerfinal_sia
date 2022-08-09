<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guitar;

class GuitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guitars =[
        [
            'name' => 'Ibanez RG550',
            'type' =>'Stratocaster'
        ]
        ,
        [
            'name' => 'Squier Bullet',
            'type' => 'Mustang'
        ]
        ,
        [
            'name' => 'Gretsch G5222',
            'type' => 'Les Paul'
        ]
        ,
        [
            'name' => 'PRS SE Custom 24',
            'type' => 'Stratocaster'
        ]



        ];
        foreach($guitars as $g){
            Guitar::create($g);
        }
    }
}
