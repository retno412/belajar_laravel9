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
        $data = [
            ['id' => 1, 'name' => 'Retno', 'score' => '80'],
            ['id' => 2, 'name' => 'Ariyanti', 'score' => '85'],
            ['id' => 3, 'name' => 'Nurningtias', 'score' => '90'],
        ];
        for ($i = 4; $i < 100; $i++){
        $data [] = ['id' => $i + 1, 'name' => $faker->name(), 'score' => $faker->numberBetween(10, 100)];
        }
        DB::table('student')->insert($data);
    }
}
