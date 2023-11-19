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

        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'id' => $i,
                'name' => $faker->name(),
                'score' => rand(70, 100), 
            ];
        }

        DB::table('student')->truncate();
        
        DB::table('student')->insert($data);
    }
}
