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
        
        //Ketik masing-masing
        
        $data = [] ;
            for ($i = 4; $i < 100; $i++) {
            // ['id'=> 1,'name'=> 'Eja', 'score'=> 80],
            // ['id'=> 2,'name'=> 'Kulasi', 'score'=> 85],
            // ['id'=> 3,'name'=> 'Dini', 'score'=> 90],
            $data[] = ['id' => $i + 1, 'name' => $faker->name(),'score' => $faker->numberBetween(50, 90)];}
        DB::table('student')->insert($data);
    }
}
