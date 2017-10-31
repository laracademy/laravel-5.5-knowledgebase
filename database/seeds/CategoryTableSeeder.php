<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        foreach(range(1, 10) as $number) {
            DB::table('categories')->insert([
                'name' => $faker->words(rand(1, 5), true),
            ]);
        }
    }
}
