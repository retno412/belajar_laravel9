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
        // Ketik aja cuy
	$data = [];
	// $data[] = ['id' => 1, 'name'=>'anu', 'score'=>25];
	// $data[] = ['id'=>2, 'name'=>$faker->name(), 'score'=>$faker->numberBetween(0,100)];
	for ($i=3; $i<=50; $i++) {
	 $data[] = ['id'=>$i, 'name'=>$faker->name(), 'score'=>$faker->numberBetween(0,100)];
	}
	DB::table('student')->insert($data);
    }
}
