<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'name' => $faker->name,
                'score' => $faker->numberBetween(0, 100),
            ];
        }

        DB::table('student')->insert($data);
    }
}
