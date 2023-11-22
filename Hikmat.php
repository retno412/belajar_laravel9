<?php

namespace Database\Seeders;

require_once 'vendor/autoload.php';

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        //
        $data = [
            // ['id' => 2, 'name' =>'hikmat', 'score' =>98],
            // ['id' => 3, 'name' =>'kenny', 'score' =>78],
        ];
        for ($i=4; $i < 51; $i++) { 
            $data[] = ['id' => $i, 'name' => $faker->name(), 'score' => $faker->numberBetween(70,100)];
            # code...
        }
        DB::table('students')->insert($data);
    }
}
