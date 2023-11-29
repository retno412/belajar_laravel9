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

        $data = [];

        // Menghasilkan 50 data dengan nama dan skor palsu
        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'id' => $i,
                'name' => $faker->name,
                'score' => $faker->numberBetween(70, 100),
            ];
        }

        DB::table('students')->insert($data);
    }
}
