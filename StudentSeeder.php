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
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        //ketik masing-masing
        $data = [
            ['id' => 1, 'name' => 'Aura', 'score' => 80],
            ['id' => 2, 'name' => 'Amira', 'score' => 85],
            ['id' => 3, 'name' => 'Ikeu', 'score' => 90],
        ];

        for ($i = 4 ; $i <= 80; $i++) {
            $data[] = [
                'id' => $i,
                'name' => $faker->name,
                'score' => $faker->numberBetween(50, 100), 
            ];
        }
        DB::table('student')->insert($data);
    }
}