<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //
        $data = [];
            for ($i = 3; $i <50; $i++) {
                // ['id' => , 'name' => $faker->name(), 'score' =>80],
                // ['id' => 2, 'name' => 'Sulthan', 'score' =>95],
                // ['id' => 2, 'name' => 'Nabil', 'score' =>90],
                // ['id' => 3, 'name' => 'Tursilo', 'score' =>100],
                $data[] = [
                    'id' => $i + 1,
                    'name' => $faker->name(),
                    'score' => $faker->numberBetween(50, 100),
                ];
            }
            DB::table('student')->insert($data);
    }
}