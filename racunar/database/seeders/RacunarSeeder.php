<?php

namespace Database\Seeders;

use App\Models\Racunar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RacunarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $i = 0;
        while($i < 25) {
            
            Racunar::create([
                'proizvodjacID' => rand(1,3),
                'model' => $faker->numerify(),
                'tipID' => rand(1,3),
                'specifikacija' => $faker->sentence(25)
            ]);

            $i = $i + 1;
        }
    }
}
